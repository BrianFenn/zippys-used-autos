<?php
    require('../model/database.php');
    require('../model/vehicle_db.php');
    require('../model/class_db.php');
    require('../model/type_db.php');
    require('../model/make_db.php');

        
    if ($action == 'list_vehicles') {
        $Class_code = filter_input(INPUT_GET, 'Class_code', FILTER_VALIDATE_INT);
        $Type_code = filter_input(INPUT_GET, 'Type_code', FILTER_VALIDATE_INT);
        $Make = filter_input(INPUT_GET, 'Make');
        $Sort = filter_input(INPUT_GET, 'Sort');

        $Vehicle_Makes = get_vehicle_makes();

        
        // call the functions
        $Class_name = get_vehicle_class_name($Class_code);
        $Vehicle_Classes = get_vehicle_classes();

        $Types = get_vehicle_types();
        $Type_name = get_vehicle_type_name($Type_code);

    $Vehicles = get_vehicles_by_selection($Class_code,$Type_code,$Make); 

        
        
        
        //$Vehicles = get_vehicles_by_class($Class_code);
        
        //if ( $Class_code != 0 && $Type_code != 0 && $Make != 0) {
            //$Vehicles = get_vehicles_by_class($Class_code);
            //$Vehicles = get_all_vehicles(get_vehicles_by_class($Class_code,get_vehicles_by_type($Type_code,get_vehicles_by_make($Make))));
        //}

        //$Vehicles = get_vehicles_by_selection(); 
        //Refined_Vehicle_Results = get_all_vehicles(get_vehicles_by_class(get_vehicles_by_type(get_vehicles_by_make())));
        //$Vehicles = get_all_vehicles(get_vehicles_by_class($Class_code,get_vehicles_by_type($Type_code,get_vehicles_by_make($Make))));
        
        include('vehicle_list.php');
    }

?> 

   
