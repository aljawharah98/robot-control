<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $command = $_GET['command']; 
    
    
    switch ($command) {
        // Perform dirction action
        case 'forward':  
            $response = array('message' => 'Forward command sent');
            break;
        case 'left':
            
            $response = array('message' => 'Left command sent');
            break;
        case 'stop':
           
            $response = array('message' => 'Stop command sent');
            break;
        case 'right':
            
            $response = array('message' => 'Right command sent');
            break;
        case 'backward':
            

            $response = array('message' => 'Backward command sent');
            break;
        default:
            $response = array('error' => 'Invalid command');
            break;
    }
    
    
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
