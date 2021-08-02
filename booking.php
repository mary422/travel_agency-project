<!DOCTYPE>
<html>
<head>
<title>booking</title>

	<style type="text/css">

	/* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<form action="script1.php" method="post">
	<div class="container" style="background-color:#87ceeb">
  <div class="elem-group">
    <label for="name"><b>Your Name</b></label>
    <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email"><b>Your E-mail</b></label>
    <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="phone"><b>Your Phone</b></label>
    <input type="tel" id="phone" name="visitor_phone" placeholder="071234567" required>
  </div>
  <hr>
  	<div class="elem-group inlined">
    	<label for="adult"><b>Adults</b></label>
    	<input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
  </div>
  <div class="elem-group inlined">
    <label for="child"><b>Children</b></label>
    <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkin-date"><b>Check-in Date</b></label>
    <input type="date" id="checkin-date" name="checkin" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date"><b>Check-out Date</b></label>
    <input type="date" id="checkout-date" name="checkout" required>
  </div>
  <div class="elem-group">
    <label for="room-selection"><b>Select Room Preference</b></label>
    <select id="room-selection" name="room_preference" required>
        <option value="">Choose a Room from the List</option>
        <option value="connecting">Connecting</option>
        <option value="adjoining">Adjoining</option>
        <option value="adjacent">Adjacent</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message"><b>Anything Else?</b></label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
  </div>
</div>
  <div class="container" style="background-color:#a67c00">
  <button type="submit"><b>Book The Rooms</b></button>
</div>
</form>
</body>
</html>