<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/loggedHome.css') }}">
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="allContentContainer">
            <div class="topDashboard">
                <div class="contentTop justify-content-between d-flex text-md-center text-start">
                    <div class="leftDashboard">
                        <img src="{{ asset('images/leftDashboard.png') }}" alt="leftDashboard" style="width:100%;">
                    </div>
                    <div class="contentText d-flex flex-column gap-2">
                        <h1>Find your Dream Job Now</h1>
                        <p>5000+ jobs vacansies for you to explore!</p>
                    </div>
                    <div class="rightDashboard">
                        <img src="{{ asset('images/rightDashboard.png') }}" alt="rightDashboard" style="width:100%;">
                    </div>
                    <div class="mobileDashboard">
                        <img src="{{ asset('images/mobileDashboard.png') }}" alt="mobileDashboard"
                            style="width:100%; height: 100%;">
                    </div>
                </div>
                <div class="d-flex container inputContainer gap-3">
                    <div class="ui transparent left icon input inputSearchContainer">
                        <img src="{{ asset('images/searchIcon.png') }}" alt="searchIcon" class="searchIcon">
                        <input type="text" placeholder="Enter Keyword" id="searchInput">
                    </div>
                    <select class="ui search selection dropdown d-flex align-items-center" id="search-select">
                        <option value="">What position are you looking for ?</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                    </select>
                    <script>
                        $('#search-select')
                            .dropdown();
                    </script>
                    <div class="ui transparent left icon input inputSearchContainer">
                        <img src="{{ asset('images/mapIcon.png') }}" alt="mapIcon" class="mapIcon">
                        <input type="text" placeholder="Location" id="searchInput">
                    </div>
                    <button type="submit" class="apply">Search</button>
                </div>
            </div>
            <div class="container popularCategory d-flex flex-column">
                <div class="topContainer d-flex justify-content-between align-items-baseline">
                    <div class="tittle"><span class="blueText">Category</span></div>
                </div>
                <div class="cardPopularContainer d-flex flex-wrap justify-content-between">
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                    <div class="cardPopular d-flex gap-3">
                        <div class="imageCardPopular">
                            <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=67x67" alt="image"
                                style="width: 100%; height: 100%;">
                        </div>
                        <div class="d-flex flex-column cardPopularText justify-content-between">
                            <h5>Web Developer</h5>
                            <p>10 Open position</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featuredJob mt-5">
                <div class="container d-flex flex-column">
                    <div class=" d-flex justify-content-between align-items-baseline">
                        <div class="tittle">Featured <span class="blueText">Job</span></div>
                        <button class="d-flex buttonViewAll gap-2 ">
                            <span>View All</span>
                            <div>
                                <img src="{{ asset('images/arrowView.png') }}" alt="arrowView">
                            </div>
                        </button>
                    </div>
                    <div class="cardFeaturedContainer d-flex gap-2">
                        <div class="d-flex flex-column gap-2">
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...
                                    </p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...
                                    </p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...
                                    </p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...
                                    </p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...
                                    </p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...
                                    </p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                            <div class="cardFeatured d-flex flex-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="companyImage">
                                        <img src="{{ asset('images/companyLogo.png') }}" alt="companyLogo">
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="tagJob1">Marketing</div>
                                        <div class="tagJob2">Design</div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="jobTittle">UI/UX Designer</h5>
                                    <span class="jobSallary">Salary: Rp.10.000.000</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="jobDesc">Lorem Ipsum is simply dummy text of the printing and typesetting...
                                    </p>
                                    <div class="d-flex gap-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="circleBlue2"></div>
                <div class="noteAnalyst">
                    <img src="{{ asset('images/noteAnalyst.png') }}" alt="noteAnalyst">
                </div>
            </div>
            <div class="topJob">
                <div class="container">
                    <div class="mb-5 d-flex justify-content-between align-items-baseline">
                        <div class="tittle"><span class="blueText">Top</span> Job Circulars</div>
                        <button class="d-flex buttonViewAll gap-2">
                            <span>View All</span>
                            <div>
                                <img src="{{ asset('images/arrowView.png') }}" alt="arrowView">
                            </div>
                        </button>
                    </div>
                    <div class="topJobCardContainer d-flex flex-wrap justify-content-between">
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                        <div class="topJobCard d-flex flex-column justify-content-between">
                            <div class="content d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <div class="companyImage d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('images/companyLogo2.png') }}" alt="companyLogo2"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="companyName">Shopee</h2>
                                            <div class="d-flex align-items-end">
                                                <div class="locationImage">
                                                    <img src="{{ asset('images/location.png') }}" alt="location"
                                                        style="width: 100%; height: 100%;">
                                                </div>
                                                <p class="locationText">Jakarta • Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="jobTime">Full Time</p>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="tittle">Visual Designer</h2>
                                    <span class="sallary">Salary: Rp.8.000.000</span>
                                </div>
                                <p class="descJob">Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                            </div>
                            <button>Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review container d-flex justify-content-between">
                <div class="peopleImageReview">
                    <img src="{{ asset('images/peopleSingle.png') }}" alt="peopleSingle">
                </div>
                <div class="d-flex flex-column gap-5 gap-lg-0 rightSideReview">
                    <div class="d-flex align-items-end totalTalent gap-2">
                        <div class="d-flex textTotalTalent">
                            <h1><span>5 million</span> talents get jobs via Maxy Academy</h1>
                        </div>
                        <div class="Mlogo">
                            <img src="{{ asset('images/mLogo.png') }}" alt="mLogo">
                        </div>
                    </div>
                    <div class="cardReviewContainer">
                        <div class="d-flex flex-column gap-4">
                            <div class="cardReview d-flex flex-column justify-content-between">
                                <div class="contentReview d-flex flex-column gap-3">
                                    <div class="d-flex gap-3">
                                        <div class="profileReview d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('images/profileReview.png') }}" alt="profileReview">
                                        </div>
                                        <div class="d-flex flex-column justify-content-between">
                                            <span class="nameReview">Agraditya Putra</span>
                                            <div class="ratingReview d-flex gap-2">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex verifContainer align-items-start  gap-2">
                                        <img src="{{ asset('images/verif.png') }}" alt="verif">
                                        <span>Verified Testimonial</span>
                                    </div>
                                    <div class="textReview">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of...
                                    </div>
                                </div>
                            </div>
                            <div class="cardReview d-flex flex-column justify-content-between">
                                <div class="contentReview d-flex flex-column gap-3">
                                    <div class="d-flex gap-3">
                                        <div class="profileReview d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('images/profileReview.png') }}" alt="profileReview">
                                        </div>
                                        <div class="d-flex flex-column justify-content-between">
                                            <span class="nameReview">Agraditya Putra</span>
                                            <div class="ratingReview d-flex gap-2">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex verifContainer align-items-start gap-2">
                                        <img src="{{ asset('images/verif.png') }}" alt="verif">
                                        <span>Verified Testimonial</span>
                                    </div>
                                    <div class="textReview">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contentCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center carouselItemContainer">
                                    <div class="cardReview d-flex flex-column justify-content-between">
                                        <div class="contentReview d-flex flex-column gap-3">
                                            <div class="d-flex gap-3">
                                                <div
                                                    class="profileReview d-flex justify-content-between align-items-center">
                                                    <img src="{{ asset('images/profileReview.png') }}"
                                                        alt="profileReview">
                                                </div>
                                                <div class="d-flex flex-column justify-content-between">
                                                    <span class="nameReview">Agraditya Putra</span>
                                                    <div class="ratingReview d-flex gap-2">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex verifContainer align-items-start  gap-2">
                                                <img src="{{ asset('images/verif.png') }}" alt="verif">
                                                <span>Verified Testimonial</span>
                                            </div>
                                            <div class="textReview">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cardReview d-flex flex-column justify-content-between">
                                        <div class="contentReview d-flex flex-column gap-3">
                                            <div class="d-flex gap-3">
                                                <div
                                                    class="profileReview d-flex justify-content-between align-items-center">
                                                    <img src="{{ asset('images/profileReview.png') }}"
                                                        alt="profileReview">
                                                </div>
                                                <div class="d-flex flex-column justify-content-between">
                                                    <span class="nameReview">Agraditya Putra</span>
                                                    <div class="ratingReview d-flex gap-2">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex verifContainer align-items-start gap-2">
                                                <img src="{{ asset('images/verif.png') }}" alt="verif">
                                                <span>Verified Testimonial</span>
                                            </div>
                                            <div class="textReview">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center carouselItemContainer">
                                    <div class="cardReview d-flex flex-column justify-content-between">
                                        <div class="contentReview d-flex flex-column gap-3">
                                            <div class="d-flex gap-3">
                                                <div
                                                    class="profileReview d-flex justify-content-between align-items-center">
                                                    <img src="{{ asset('images/profileReview.png') }}"
                                                        alt="profileReview">
                                                </div>
                                                <div class="d-flex flex-column justify-content-between">
                                                    <span class="nameReview">Agraditya Putra</span>
                                                    <div class="ratingReview d-flex gap-2">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex verifContainer align-items-start gap-2">
                                                <img src="{{ asset('images/verif.png') }}" alt="verif">
                                                <span>Verified Testimonial</span>
                                            </div>
                                            <div class="textReview">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of...
                                            </div>
                                        </div>

                                    </div>
                                    <div class="cardReview d-flex flex-column justify-content-between">
                                        <div class="contentReview d-flex flex-column gap-3">
                                            <div class="d-flex gap-3">
                                                <div
                                                    class="profileReview d-flex justify-content-between align-items-center">
                                                    <img src="{{ asset('images/profileReview.png') }}"
                                                        alt="profileReview">
                                                </div>
                                                <div class="d-flex flex-column justify-content-between">
                                                    <span class="nameReview">Agraditya Putra</span>
                                                    <div class="ratingReview d-flex gap-2">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                        <img src="{{ asset('images/fullStar.png') }}" alt="fullStar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex verifContainer align-items-start gap-2">
                                                <img src="{{ asset('images/verif.png') }}" alt="verif">
                                                <span>Verified Testimonial</span>
                                            </div>
                                            <div class="textReview">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#contentCarousel"
                            data-bs-slide="prev">
                            <div class="d-flex justify-content-end align-items-center custom-control-button">
                                <img src="{{ asset('images/arrowNext.png') }}" alt="arrowPrev" class="arrowPrev">
                            </div>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#contentCarousel"
                            data-bs-slide="next">
                            <div class="d-flex justify-content-start align-items-center custom-control-button">
                                <img src="{{ asset('images/arrowNext.png') }}" alt="arrowNext" class="arrowNext">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
