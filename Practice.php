<?php

// class student //class
// {
//     public $name;
//     public $age;
//     public $course;

//     public function __construct($name,$age,$course)
//     {
//         $this->name= $name;
//         $this->age= $age;
//         $this->course= $course
//     }
//     public function displayInfo()
//     {
//         echo $this->name;
//         echo "<br>";
//         echo $this->age;
//         echo "<br>";
//         echo $this->course;
//         echo "<br>";
//     }
// }

// $s = new student("ansh",19,"AI-ML"); //new object
// $s->displayInfo();


// class BankAccount
// {
//     public $accountHolder;
//     public $accountNumber;
//     public $balance;

//     public function __construct($accountHolder,$accountNumber,$balance)
//     {
//         $this->accountHolder = $accountHolder;
//         $this->accountNumber = $accountNumber;
//         $this->balance = $balance;
//     }
//     public function displayAccount()
//     {
//         echo $this->accountHolder;
//         echo $this->accountNumber;
//         echo $this->balance;
//     }
// }

// $b1 = new BankAccount("Jeel",21,7500);
// $b2 = new BankAccount("ansh",21,7500);
// $b1->displayAccount();
// $b2->displayAccount();




// class emp 
// {
//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     public function work()
//     {
//         echo $this->name . " is working ";  
//     }
// }
// class Manager extends emp
// {
//     public function manage()
//     {
//         echo $this->name . " is manage the team";
//     }
// }

// $EMP = new Manager("Jeel");
// $EMP->work();
// $EMP->manage();


// class Bank
// {
//     public $bankname;

//     public function __construct($bankname)
//     {
//         $this->bankname = $bankname;
//     }
//     public function BankINFO()
//     {
//         echo " Bank Name is ".$this->bankname.".";
//     } 
// }
// class SavingsAccount extends Bank
// {
//     public $accountHolder;
//     public $balance;
    
//     public function __construct($bankname,$accountHolder,$balance)
//     {
//         parent::__construct($bankname);

//         $this->accountHolder = $accountHolder;
//         $this->balance = $balance;
//     }
//     public function displayAccount()
//     {
//         echo "Account Holder Name " .$this->accountHolder.".";
//         echo "Totle Balance " .$this->balance.".";
//     }
// }
// $b1 = new SavingsAccount("SBI","Jeel",100000);
// $b1->BankINFO();
// $b1->displayAccount();


// class Employee 
// {
//     private $name;
//     private $salary;

//     public function __construct($name,$salary)
//     {
//         $this->name = $name;
//         $this->salary = $salary;
//     }
//     public function getName()
//     {
//         return $this->name;
//     }
//     public function getSalary()
//     {
//         return $this->salary;
//     }
//     public function increaseSalary($amount)
//     {
//         if($amount > 0)
//             {
//                 $this->salary += $amount;
//             }
//     }    
//     public function displayInfo()
//     {
//         echo "Name is : ".$this->name;
//         echo "salary is : ".$this->salary;
//     }
// }

// class Manager extends Employee
// {
//     private $bonus;
//     public function __construct($name,$salary,$bonus)
//     {
//         parent::__construct($name,$salary);

//         $this->bonus = $bonus;
//     }
//     public function displayManagerInfo()
//     {
//         echo "Name is : " . $this->getName() . "<br>";
//         echo "Salary is : " . $this->getSalary() //getSalary je chhe ne ae geeter method 
//         . "<br>";
//         echo "Bonus is : " . $this->bonus . "<br><br>";
//     }
// }


// // $emp = new Employee("Jeel",10000);
// $emp = new Manager("Jeel",25000,5000);
// $emp1 = new Manager("ansh",40000,10000);
// // echo $emp->getName();
// // echo $emp->getSalary();
// // $emp->increaseSalary(1000);
// // echo $emp->getSalary();
// // $emp->displayInfo();
// $emp->displayManagerInfo();
// $emp1->displayManagerInfo();




class shree
{
    public $productName;
    public $price;
    public $productId;
    public $total;

    public function __construct($productName,$price,$productId,$total)
    {
        $this->productName=$productName;
        $this->price=$price;
        $this->productId=$productId;
        $this->total=$total;
    }
    public function buy()
    {
        return $this->price * $this->total;     
    }

}
class  product1 extends shree
{
    public $discount;
    public function __construct($productName,$price,$productId,$total)
    {
        parent::__construct($productName,$price,$productId,$total);
        $this->discount = 0;
    }

    public function discount()
    {
        if($this->total >=5 )
            {
               $this->discount = $this->buy() * 10 / 100;
            }
    }
    public function BILL()
    {
        $this->discount();

        echo "Product Name : ".$this->productName."<br>";
        echo "Product ID : ".$this->productId."<br>";
        echo "Original Bill : ₹".$this->buy()."<br>";
        echo "Total Product : ".$this->total."<br>";
        echo "Final Bill : ₹".($this->buy() - $this->discount);
        echo "Discount : ₹".$this->discount."<br>";
    }

}

$bill = new product1("MI NOTE 17",20000,1,10);
$bill->BILL();

?>