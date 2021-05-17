<?php
class District
{
  public $districtNmae;
  public $districtArea;
  public $totalPopulation;
  public $weatherCondition;
  public $landUsed;
  public $overview;
  $cropsObj=new Crops();
  $fruitObj=new Fruit();
  
  public function setDistrictName($distictName)
  {
  $this->districtName=$districtNmae;
  }
  public function getDistrictName()
  {
  return $this->districtNmae;
  }
  
  public function setdistrictArea($districtArea)
  {
  $this->districtArea=$districtArea;
  }
  public function getDistrictArea()
  {
  return $this->sistrictArea;
  }
  public function setPopulation($populaton)
  {
  $this->totalPopulation=$population;
  }
  public function getPopulation()
  {
  return $this->totalPupulation;
  }
  public function setWeather($weatherCondition)
  {
  $this->weatherCondition=$weatherCondition;
  }
  public getWeatherCondition()
  {
  return $this->weatherCondition;
  }
  
  public function setLandUsed($landUsed)
  {
  $this->landUsed=$landUsed;
  }
  public getLandUsed()
  {
  return $this->landUsed;
  }
  public function viewDistrictInfo();
  public updateDistrictInfo()

}

class Others
	{
	private $fish;
	private $cattle;
	private $other;
	public function setFish($fish)
	{
	$this->fish=$fish;
	}
	public function getFish()
	{
	return $this->fish;
	}
	public function setCattle($cattle)
	{
	$this->cattle=$cattle;
	}
	public function getCattle()
	{
	return $this->cattle;
	}
	public function otherInformatin();
	}

class Crops
	{
	private $cropsName;
	private $totalProduction;
	private $totalImport;
	private $totalExport;
	public function setCropsNmae($cropsname)
	{
	$this->cropsNmae=$cropsNmae;
	}
	public function getCropsNmae()
	{
	return $this->cropsNmae;
	}
	public funtion setTotalPdoductioN($totalPdoduction)
	{	
	$this->totalProduction=$totalProduction;
	}
	public setTotalImport($totalImport)
	{
	$this->totalImport=$totalImport;
	}
	public function getTotlaImport()
	{
	return $this->totalImport; 
	}
	public function setTotalExport($totalExport)
	{
	return $this->totalExport;
	}
	public function showCropsInfo();
	public function updateCropsInfo();
	}

class Fruits
	{
	private $fruitNmae;
	private $totalProduction;
	private $totalImport;
	private $totalExport;
    public function setfruitNmae($fruitNmae)
	{
	$this->fruitNmae=$fruitNmae;
	}
	public function getfruitNmae()
	{
	return $this->fruitNmae;
	}
	
	public function settotalProduction($totalProduction)
	{
	$this->totalProduction=$totalProduction;
	}
	public function gettotalProduction()
	{
	return $this->totalProduction;
	}
	
	public function settotalImport($totalImport)
	{
	$this->totalImport=$totalImport;
	}
	public function gettotalImport()
	{
	return $this->totalImport;
	}
	
	public function settotalExport($totalExport)
	{
	$this->totalExport=$totalExport;
	}
	public function gettotalExport()
	{
	return $this->totalExport;
	}
	
	
	public function showCropsInfo();
	public function updateCropsInfo();
	}
class Problems
	{
	private $problemName;
	private $date;
	private $problemDescription;
	private $address;
	public function setProblemNmae($problmNmae)
	{
	$this->problemNmae=$problemnmae;
	}
	public function getProblemNmae()
	{
	return $this->problemName;
	}
	public function  setDate($date)
	{
	$this->date=$date;
	}
	public function getDae()
	{
	return $this->date;
	}
	public function setAdd($add)
	{
	
	$this->address=$add;
	}
	public function getAdd()
	{
	return $this->address;
	}
	
	public function setproblemDescription($problemDescription)
	{
	
	$this->problemDescription=$problemDescription;
	}
	public function getproblemDescription()
	{
	return $this->problemDescription;
	}
	
	public function postProblem();
	public function deleteProblem();
	}
class Farmar
	{
	private $name;
	private $totalLandused;
	private $cropsNmae;
	private $totalProductin;
	public function setNmae($nmae)
	{
	$this->name=$name;
	}
	public function getNmae()
	{
	return $this->nmae;
	}
	public function setTotalLand($totalLandused)
	{
	$this->totlaLandused=$totalLandUsed;
	}
	public function getTotalLand()
	{
	return $this->totlaLandUsed;
	}
	public function setCropsNmae($cropsName)
	{
	$this->cropsNmae=$cropsNmae;
	}
	public function getCropsNmae()
	{
	
	return $this->cropsNmae;
	}
	
	public function viewFarmarsInfo();
	public updateFarmarsInfo();
	
	}
class ImportExport
	{
	private $productsNmae;
	private $amount;
	private $totalProduction;
	
	public function setProductsNmae($producton)
	{
	$this->productNmae=$productNamv;
	}
	public function getProductNmae()
	{
	return $this->productNmae;
	}
	public function setAmount($amount)
	{
	$this->amount=$amount;
	}
	public function getAmount()
	{
	return $this->amount;
	}
	public function setTotalProduction($totalProduction)
	{
	$this->totalProduction=$totalProduction;
	}
	public function getTotalProduction()
	{
	return $this-totalProduction;
	}
	
	public function viewImportExportInfo();
	}
class AgriculturalInfo
	{
	$districtObj=new District();
	$farmarObj=new Framar();
	$problemObj=new Problems();
	$importExport=new ImportExportInfo();
	}

?>