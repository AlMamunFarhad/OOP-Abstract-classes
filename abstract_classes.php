<?php 
    
    //@@@@@@@@@@ First Example @@@@@@@@@@
    // ***** Abstruct parent class Start *****
	abstract class Vehicle 
	{

		protected $brand;
		protected $model;

		public function __construct($brand, $model)
		{
		    $this->brand = $brand;
		    $this->model = $model;
		}

		public function getDetails()
		{
		    return "Brand: " . $this->brand . ", Model: " . $this->model;
		} 

		abstract public function maxSpeed();

	}  // ***** Abstruct parent class End *****
        
      //***** Vehicle class Start ******
	class Car extends Vehicle
	{
		private $doorCount;

		public function __construct($brand, $model, $doorCount)
	    {
		    parent::__construct($brand,$model);
		    $this->doorCount = $doorCount;
	    }

		public function maxSpeed()
		{
			return "Car max speed: 220 km/h";
	    }

	    public function getCarDetails()
		{
			return $this->getDetails() . ", Doors: " . $this->doorCount;
		}

	}   //***** Vehicle class End *****
        

	//***** Bike class Start *****
	class Bike extends Vehicle 
	{ 
		private $type;

	    public function __construct($brand,$model,$type)
		{
		    parent::__construct($brand,$model);
		    $this->type = $type;	
		}

	    public function maxSpeed()
	    {
			return "Bike max speed: 180 km/h";
		}

	    public function getBikeDetails()
	    {
		    return $this->getDetails() . ", Type: " . $this->type;
		}	 
	}  //***** Bike class End *****


	   //@@@@@@@@@@@ Second Example @@@@@@@@@@
	   // ***** Abstruct parent class Start *****
		abstract class Employee{

	    protected $name;
	    protected $id;

	    public function __construct($name, $id){
		    $this->name = $name;
		    $this->id = $id;
	    }

	    public function getEmployeeDetails(){
	    	return "Name: " . $this->name . ", ID: " . $this->id;
	    }

	    abstract public function calculateSalary();

		} // ***** Abstruct parent class End *****


	   // ***** Full-Time Employee Start *****
	   class FullTimeEmployee extends Employee {

	   private $annualSalary;

	   public function __construct($name, $id, $annualSalary){
		   	parent::__construct($name, $id);
		   	$this->annualSalary = $annualSalary;
	   }

	   public function calculateSalary(){
	   		return "Full-Time Employee: $" . $this->annualSalary;
	   }

	   } // ***** Full-Time Employee End *****

	// ***** Part Time Employee Start *****
	  class PartTimeEmployee extends Employee{

	  private $hourlyRate;
	  private $hoursWorked;

	  public function __construct($name, $id, $hourlyRate, $hoursWorked){
		   parent::__construct($name, $id);
		   $this->hourlyRate = $hourlyRate;
		   $this->hoursWorked = $hoursWorked;
	  }

	  public function calculateSalary(){
		   $salary = $this->hourlyRate * $this->hoursWorked;
		   return "Part-Time Employee: $" . $salary;
	  }

	  } // ***** Full-Time Employee End *****
       
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Abstract Classes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
		<div class="container">
		 <div class="row">
		 <div class="col-md-3">	
		  <div class="mt-5 d-flex justify-content-center align-items-start">
		  	<div class="shadow-sm card p-4">
		      <h4 class="text-center">Car Details.</h4>
		        <h5>
				<?php 
				$car = new Car('Toyota','corolla', 4);
				echo $car->getCarDetails() . "<br>";
				echo $car->maxSpeed() . "<br>";
			  	?>
		     </h5>
		   </div>
		  </div>
		</div>
		<div class="col-md-3">
		  <div class="mt-5 d-flex justify-content-center align-items-start">
		  	<div class="shadow-sm card p-4">
		      <h4 class="text-center">Bike Details.</h4>
		        <h5>
			  	<?php 
				$bike = new Bike('Yamaha', 'R15', 'Sport');
				echo $bike->getBikeDetails() . "<br>";
				echo $bike->maxSpeed() . "<br>";
			  	?>
		     </h5>
		   </div>
		  </div>
		</div>
		 <!-- second Example -->
		<div class="col-md-3">
  		 <div class="mt-5 d-flex justify-content-center align-items-start">
		  	<div class="shadow-sm card p-4">
		      <h4 class="text-center">Full Time Employee Details.</h4>
		        <h5>
				<?php 
				$fullTimeEmployee = new FullTimeEmployee('Farhad','105', 5000);
				echo $fullTimeEmployee->getEmployeeDetails() . "<br>";
				echo $fullTimeEmployee->calculateSalary() . "<br>";
			  	?>
		     </h5>
		   </div>
		 </div>
		</div>
		<div class="col-md-3">
  		 <div class="mt-5 d-flex justify-content-center align-items-start">
		  	<div class="shadow-sm card p-4">
		      <h4 class="text-center">Part Time Employee Details.
				</h4>
		        <h5>
				<?php 
				$PartTimeEmployee = new PartTimeEmployee('Abdullah', 110, 18, 100);
				echo $PartTimeEmployee->getEmployeeDetails() . "<br>";
				echo $PartTimeEmployee->calculateSalary() . "<br>";
			  	?>
		     </h5>
		   </div>
		  </div>
		</div>
	  </div>
	</div>
   </body>
 </html>