 <html lang="en"><head>
     <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>The Appointment Page</title></head>

     <body><h1>ADD Appointment</h1> <form action="/pages/create" method="POST">


         @csrf <label for="Lname">Patient Last Name:</label><br> 
         <input type="text" id="lname" name="lname" required><br>

<br>
           <label for="Fname">Patient First Name:</label><br>
            <input type="text" id="fname" name="fname" required> 

            <br> <label for="pnumber">Phone number:</label><br>
            <input type="number" id="pnumber" name="pnumber" required>

             <br> <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" >

          <br>  <label for="address">Home Address:</label><br>
            <input type="text" id="address" name="address" required>

             <br> <label for="doctor">Doctor Assigned:</label><br>
            <input type="text" id="doctor" name="doctor" required>


 <br> <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" required>

            <br>  <label for="time">Time Slot:</label><br>
            <input type="time" id="time" name="time" required>




         <br>   <label for="status">Status:</label>
<select id="status" name="status"> 
  <option value="Ongoing">Ongoing</option>
  <option value="Available">Available</option>
  <option value="Waiting">Waiting</option>
 
</select>
<br>
            <button>Create Appointment</button> 
         </form></body></html>

         <!--
'Ongoing', 'Finished', 'Cancelled','Waiting','Available'


Ongoing,available,waiting is the ONLY options when creating. For Updating: "Ongoing', 'Finished', 'Cancelled','Waiting','Available'

-->