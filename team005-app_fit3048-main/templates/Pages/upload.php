    <?php


    /**
     * @var \App\View\AppView $this
     * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
     */

    $id = $this->Identity->get('user_id');

    // $jsons = '{"email":"test1@yahoo.com","password":123456,"mobile_number":"0432440488","first_name":"Test","last_name":"r","profile_fields":"N.a","role":"random","DOB":"2021-09-02","postcode":1234}';

    $data_s = explode(",",$_COOKIE["answers"]);
    $data =json_encode($data_s);
  //  var_dump($data);
   // echo gettype($data);
    //print_r($data);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "robo";


    // Database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

/*$sql = "INSERT INTO users  ( email,password,mobile_number,first_name,last_name,profile_fields,role,DOB,postcode)
VALUES ('$data->email','$data->password','$data->mobile_number','$data->first_name','$data->last_name','$data->profile_fields','$data->role','$data->DOB',$data->postcode)";*/

        $result = $conn->query("SELECT profile_fields FROM users WHERE user_id = $id");

        //if($result->num_rows === 0) {
            // row not found, do stuff...
        //    $sql = "UPDATE users SET profile_fields = '$data_s' WHERE user_id=37";
         //   if ($conn->query($sql) === TRUE) {
          //      echo "Store data only single successfully";
           // }
           // echo('nothing here');
       // }

       // else {
            // do other stuff...
            $fetchedDataRaw = $result->fetch_row();
        //   var_dump($fetchedDataRaw);
           // $fetchedDataRaw = $fetchedDataRaw[0];
          //  var_dump($fetchedDataRaw);
            $finals=json_encode($fetchedDataRaw);

            $final= $data.$finals;

           // var_dump($final);

            $sql = "UPDATE users SET profile_fields = '$final' WHERE user_id=$id";
            //var_dump($sql);
           // $fetchedData = json_decode($fetchedDataRaw);
            //var_dump($fetchedData);
            if ($conn->query($sql) === TRUE) {
                echo "Store data only single successfully";}
       // }
