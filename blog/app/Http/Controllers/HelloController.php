<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

	function welcome()
	{
    	return view('welcome');
	}

	function hello()
	{
		return view('hello');
	}

    function getTextGet(Request $request)
    {
		$mytext = $request->input('mytext');
		$loop = $request->input('loop');
		$respone = "";
		if($mytext=="hello")
		{
			for($i=1;$i<=$loop;$i=$i+1)
			{
				$respone = $respone."good bye!<br>";
			}
		}
		else
		{
			for($i=1;$i<=$loop;$i=$i+1)
			{
				$respone = $respone."<h1>yeah!</h1><br>";	
			} 
		}
		
		return $respone;
		// return view('hello');
	}

	function getTextPost(Request $request){
		$mytext = $request->input('mytext');
		if($mytext=="hello") return "good bye!";
		else return "<h1>yeah!</h1>";
		return $mytext;
	}

	//HW 15Feb
	//isPrime?
	function hw15feb()
	{
		return view('hw15feb');
	}	
	
	function isPrime(Request $request)
	{
		$number = $request->input('number');
		
		if($number==1 || $number=="") return "<h1>".$number." is not prime number.</h1>";
		
		for ($i=2; $i*$i<=$number; $i++) 
			if ($number%$i == 0) return "<h1>".$number." is not prime number.</h1>";
		return "<h1>".$number." is a prime number.</h1>";		
	}
	
	function printPrime(Request $request)
	{
		$n = $request->input('number');
		echo "Prime number between 1 to ".$n." are : ";
		for($number=2;$number<=$n;$number++)
		{			
			$p = 1;
			for ($i=2; $i*$i<=$number; $i++) 
				if ($number%$i == 0) {$p=0; break;}
			if($p==1) echo $number." ";			
		}
	}

	function colorPrime(Request $request)
	{
		$n = $request->input('number');
		echo "Prime number between 1 to ".$n." are : ";
		$all_prime = array();
		$idx = 0;
		for($number=2;$number<=$n;$number++)
		{			
			$p = 1;
			for ($i=2; $i*$i<=$number; $i++) 
				if ($number%$i == 0) {$p=0; break;}

			if($p==1)
			{
				$idx++;
				$all_prime[$idx] = $number;
			}
		}

		for($i=1;$i<=$idx;$i++)
		{
						
			if($i==1) echo "<p style='color:red;display:inline;'>".$all_prime[$i].' </p>';			
			else if($i==$idx) echo "<p style='color:red;display:inline;'>".$all_prime[$i].' </p>';
			elseif($i%2==0) 
				echo "<p style='color:green;display:inline;'>".$all_prime[$i].' </p>';
			elseif($i%5==0)
				echo "<p style='color:blue;display:inline;'>".$all_prime[$i].' </p>';
			else echo $all_prime[$i]." ";
		}		
	}

	//hw22feb
	//isPrime?
	function hw22feb()
	{
		return view('hw22feb');
	}	
	
	function hw22feb_isPrime(Request $request)
	{
		$number = $request->input('number');
		
		if($number==1 || $number=="") return view('hw22feb_isPrime', 
											['number'=>$number], 
											['ans' => 0]);			
		
		for ($i=2; $i*$i<=$number; $i++) 
			if ($number%$i == 0) return view('hw22feb_isPrime', 
											['number'=>$number], 
											['ans' => 0]);
		return view('hw22feb_isPrime',
					['number'=>$number], 
					['ans' => 1]);		
	}
	
	function hw22feb_printPrime(Request $request)
	{
		$n = $request->input('number');		
		$p_number = array();
		$idx = -1;
		for($number=2;$number<=$n;$number++)
		{			
			$p = 1;
			for ($i=2; $i*$i<=$number; $i++) 
				if ($number%$i == 0) {$p=0; break;}
			if($p==1) {$idx++; $p_number[$idx] = $number;}
		}

		return view('hw22feb_printPrime', 
							['p_prime' => $p_number],
							['n' => $n]);
	}

	function hw22feb_colorPrime(Request $request)
	{
		$n = $request->input('number');		
		$p_number = array();
		$idx = 0;
		for($number=2;$number<=$n;$number++)
		{			
			$p = 1;
			for ($i=2; $i*$i<=$number; $i++) 
				if ($number%$i == 0) {$p=0; break;}
			if($p==1) {$idx++; $p_number[$idx] = $number;}
		}

		return view('hw22feb_colorPrime', 
							['p_prime' => $p_number],
							['n' => $n]);
	}
}


