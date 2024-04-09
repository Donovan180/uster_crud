<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelVehicles;
use App\Models\ModelDrivers;
use App\Models\ModelTrips;

class HomeController extends Controller
{
    public function Index(){
        $vehicles_count = ModelVehicles::count();
        $drivers_count = ModelDrivers::count();
        $trips_count = ModelTrips::count();
        return view('front.index',array('vehicles_count' => $vehicles_count,'drivers_count' => $drivers_count,'trips_count' => $trips_count));
    }

    public function ShowVehicles(){
        $all_vehicles = ModelVehicles::all();
        return view('front.show-vehicle',array('all_vehicles' => $all_vehicles));
    }

    public function ShowDrivers(){
        $all_drivers = ModelDrivers::all();
        return view('front.show-driver',array('all_drivers' => $all_drivers));
    }

    public function ShowInfoTrip(){

        $all_trips = ModelTrips::all();

        $vehicle = '';
        $driver = '';

        /* Extraemos los campos vehicle y driver */
        foreach ($all_trips as $all_trip) {
            $vehicle .= $all_trip->vehicle.',';
            $driver .= $all_trip->driver.',';
        }
        /* Quitamos las ',' con el método explode */
        $vehicle_ = explode(',',$vehicle);
        $driver_ = explode(',', $driver);

        /* Ejecutamos la consulta para extraer solo los datos que sean iguales
            a las variables $vehicle y $driver
        */
        $all_trips_confirm  = ModelTrips::leftjoin('drivers',function($join){
            $join->on('trip.driver','=','drivers.name');
        })
        ->leftjoin('vehicles', function($join){
            $join->on('trip.vehicle','=','vehicles.model');
        })
        ->whereIn('model',$vehicle_)
        ->whereIn('name',$driver_)
        ->get();

        return view('front.show-info-trip',array('all_trips' => $all_trips_confirm));
    }

    /* CRUD Vehicle */
    public function CreateVehicle(){
        $data_driver = ModelDrivers::select('license')
        ->distinct()
        ->get();
        return view('front.create-vehicle',array('data_driver' => $data_driver));
    }

    public function NewVehicle(Request $request){
        $brand = $request->input('brand');
        $model = $request->input('model');
        $plate = $request->input('plate');
        $license = $request->input('license');

        $new_vehicle = new ModelVehicles;

        $new_vehicle->brand = $brand;
        $new_vehicle->model = $model;
        $new_vehicle->plate = $plate;
        $new_vehicle->licenseRiquered = $license;
        $new_vehicle->save();

        return redirect('/show-vehicles');

    }

    public function DeleteVehicle($idvehicle){
        $vehicle = ModelVehicles::findOrFail($idvehicle);
        $vehicle->delete();
        return redirect('/show-vehicles');
    }

    public function EditVehicle($idvehicle){
        $data_driver = ModelDrivers::select('license')
        ->distinct()
        ->get();
        $data_vehicle = ModelVehicles::where('id','=',$idvehicle)->first();
        return view('front.edit_vehicle',array('data_vehicle' => $data_vehicle,'data_driver' => $data_driver));
    }

    public function UpdateVehicle(Request $request){
        $idVehicle = $request->input('idVehicle');
        $brand = $request->input('brand');
        $model = $request->input('model');
        $plate = $request->input('plate');
        $license = $request->input('license');

        $update_vehicle = ModelVehicles::findOrFail($idVehicle);

        $update_vehicle->update([
            'brand' => $brand,
            'model' => $model,
            'plate' => $plate,
            'licenseRiquered' => $license
        ]);

        return redirect('/show-vehicles');

    }
    /* CRUD Vehicle */

    /* CRUD Driver */
    public function CreateDriver(){
        return view('front.create-driver');
    }

    public function NewDriver(Request $request){
        $name = $request->input('name_l');
        $surname = $request->input('surname');
        $license = $request->input('license');

        $new_driver = new ModelDrivers;

        $new_driver->name = $name;
        $new_driver->surname = $surname;
        $new_driver->license = $license;
        $new_driver->save();

        return redirect('/show-drivers');

    }

    public function DeleteDriver($iddriver){
        $driver = ModelDrivers::findOrFail($iddriver);
        $driver->delete();
        return redirect('/show-drivers');
    }

    public function EditDriver($iddriver){
        $data_driver = ModelDrivers::where('id','=',$iddriver)->first();
        return view('front.edit_driver',array('data_driver' => $data_driver));
    }

    public function UpdateDriver(Request $request){
        $idDriver = $request->input('idDriver');
        $name = $request->input('name_l');
        $surname = $request->input('surname');
        $license = $request->input('license');

        $update_driver = ModelDrivers::findOrFail($idDriver);

        $update_driver->update([
            'name' => $name,
            'surname' => $surname,
            'license' => $license
        ]);

        return redirect('/show-drivers');

    }
    /* CRUD Driver */

    /* CRUD Trip */

    public function CreateTrip(){
        return view('front.create-trip');
    }

    public function SearchVehicle(Request $request){
        $selected_date = $request->input('selected_date');

        // Convertimos la fecha al formato deseado que esta en el campo date
        $datetrip = date('Y-m-d', strtotime($selected_date));

        // Selecciona la fecha de viaje
        $trips = ModelTrips::where('date','=',$datetrip)->get();

        // Valida que no exista un viaje en la fecha seleccionada
        if ($trips->isEmpty()) {
            $data_trip = ModelVehicles::all();
            return json_encode($data_trip);
        }else{
        /* Solo extraerá los vehiculos libres de viaje en esa fecha seleccionada */
            $models = '';
            foreach ($trips as $trip) {
                $models .= $trip->vehicle.',';
            }
            $models_ = explode(',',$models);

            $free_models = ModelVehicles::whereNotIn('model',$models_)
            ->get();

            return json_encode($free_models);
        }
    }

    public function SearchDriver(Request $request){
        $selected_date = $request->input('selected_date');
        $vehicle_trip = $request->input('vehicle_trip');

        // Convertimos la fecha al formato deseado que esta en el campo date
        $datetrip = date('Y-m-d', strtotime($selected_date));

        // Selecciona la fecha de viaje para extraer el nombre del vehículo
        $trips = ModelTrips::where('date','=',$datetrip)->get();

        // Selecciona la licencia
        $license = ModelVehicles::where('model','=',$vehicle_trip)->first();

        /* Muestra solo los conductores disponibles que no tengan viaje en la fecha seleccionada
         y que su licencia coincida con la del vehículo */
        $drivers = '';
        foreach ($trips as $trip) {
            $drivers .= $trip->driver.',';
        }

        $drivers_ = explode(',',$drivers);
        $free_drivers = ModelDrivers::whereNotIn('name',$drivers_)
        ->where('license','=',$license->licenseRiquered)
        ->get();

        return json_encode($free_drivers);

    }

    public function NewTrip(Request $request){
        $date_trip = $request->input('date-trip');
        $vehicle = $request->input('vehicle');
        $driver = $request->input('driver');

        $new_trip = new ModelTrips;

        $new_trip->vehicle = $vehicle;
        $new_trip->driver = $driver;
        $new_trip->date = $date_trip;
        $new_trip->save();

        return redirect('/show-info-trips');

    }

    public function EditTrip($idtrip){
        $data_trip = ModelTrips::where('idTrip','=',$idtrip)->first();
        return view('front.edit_trip',array('data_trip' => $data_trip));
    }

    public function UpdateTrip(Request $request){
        $idTrip = $request->input('idTrip');
        $date_trip = $request->input('date-trip');
        $vehicle = $request->input('vehicle');
        $driver = $request->input('driver');

        $update_driver = ModelTrips::findOrFail($idTrip);

        $update_driver->update([
            'vehicle' => $vehicle,
            'driver' => $driver,
            'date' => $date_trip
        ]);

        return redirect('/show-info-trips');
    }
}
