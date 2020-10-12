

<?php
   
   $con = mysqli_connect('localhost','root', 'root');
   
   if(!$con)
   {
    echo 'Невозможно подключиться к серверу';
   }
   
   if(!mysqli_select_db($con,'charpcourses1'))
   {
    echo 'Ошибка базы данных';
   }
   
   $name = $_POST['name'];
   $surname = $_POST['surname'];
   $coursenum = $_POST['coursenum'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   
   $sql ="INSERT INTO orders (name, surname, coursenum, number, email) VALUES ('$name', '$surname', '$coursenum', '$number', '$email')";
   
   if(!mysqli_query($con,$sql))
   {
    echo 'Неизвестная ошибка';
   }
   
   else
   {
    echo 'Данные успешно внесены! Ожидайте звонка менеджера.';
   }
  
?>