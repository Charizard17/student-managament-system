<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="p-3">

    <form name="Student" method="POST" action="studentdb.php">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="bg-secondary font-weight-bold text-white text-center"><b>Course Information</b></h2>
                    <hr>
                    <table class="table table-striped table-dark" style="width: 365px; height: 350px;">
                        <thead class="thead-dark">
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>Course ID</td>
                                <td>
                                    <select name="courseid" id="iCourseid" style="width: 200px; margin: 2px;" class="text-right">
                                        <option value="space"></option>
                                        <option value="STEM">STEM04954</option>
                                        <option value="Legal Studies">LS905865</option>
                                        <option value="Medical Science">Med290045</option>
                                        <option value="Education">Edu390045</option>
                                        <option value="Business">Bus490045</option>
                                        <option value="Managament">Man590045</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Faculty</td>
                                <td>
                                    <select name="faculty" id="iFaculty" style="width: 200px; margin: 2px;" class="text-right">
                                        <option value="space"></option>
                                        <option value="STEM">Science Technology Engineering & Maths</option>
                                        <option value="Legal Studies">Law School</option>
                                        <option value="Medical Science">Medical School</option>
                                        <option value="Hospitality">Scoial Science</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>School</td>
                                <td>
                                    <select name="faculty" id="iFaculty" style="width: 200px; margin: 2px;" class="text-right">
                                        <option value="space"></option>
                                        <option value="BIS">Business Information</option>
                                        <option value="ComputerScience">Computer Science</option>
                                        <option value="Maths">Maths</option>
                                        <option value="SoftwareEng">Software Engineering</option>
                                        <option value="Games">Computer Games</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Attendance</td>
                                <td>
                                    <select name="faculty" id="iFaculty" style="width: 200px; margin: 2px;" class="text-right">
                                        <option value="space"></option>
                                        <option value="fulltime">Full Time</option>
                                        <option value="parttime">Part Time</option>
                                        <option value="distance">Distance</option>
                                        <option value="sandwich">Sandwich Programme</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Academic Year:</td>
                                <td>
                                    <select name="academic" id="iAcademic" style="width: 200px; margin: 2px;" class="text-right">
                                        <option value="space"></option>
                                        <option value="2018-2019">2018-2019</option>
                                        <option value="2019-2020">2019-2020</option>
                                        <option value="2020-2021">2020-2021</option>
                                        <option value="2021-2022">2021-2022</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Year Level:</td>
                                <td>
                                    <select name="yearlevel" id="iYearLevel" style="width: 200px;" class="text-right">
                                        <option value="space"></option>
                                        <option value="zero">Year 0</option>
                                        <option value="parttime">Year 1</option>
                                        <option value="distance">Year 2</option>
                                        <option value="sandwich">Year 3</option>
                                        <option value="sandwich">Year 4</option>
                                        <option value="sandwich">Year 5</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <table class="table table-striped table-dark" style="width: 365px; height: 350px;">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Course Tutor:</td>
                                <td>
                                    <input type="text" name="tutor" id="iTutor" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Course Code:</td>
                                <td>
                                    <input type="text" name="coursecode" id="iCoursecode" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Course Title:</td>
                                <td>
                                    <input type="text" name="title" id="iTitle" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Undergraduate:</td>
                                <td>
                                    <input type="text" name="undergraduate" id="iUndergraduate" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Postgraduate:</td>
                                <td>
                                    <input type="text" name="postgraduate" id="iPostgraduate" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Research:</td>
                                <td>
                                    <input type="text" name="research" id="iResearch" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-4">
                    <h2 class="bg-secondary font-weight-bold text-white text-center"><b>Student Details</b></h2>
                    <hr>
                    <table class="table table-striped table-dark" style="width: 365px; height: 350px;">
                        <thead class="thead-dark">
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>Student ID</td>
                                <td>
                                    <input type="text" name="StudentID" id="playerxid" style="width: 200px;" class="text-right">
                                </td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>
                                    <select name="faculty" id="iFaculty" style="width: 200px; margin: 2px;" class="text-right">
                                        <option value="space"></option>
                                        <option value="mr">Mr</option>
                                        <option value="mrs">Mrs</option>
                                        <option value="miss">Miss</option>
                                        <option value="doctor">Dr</option>
                                        <option value="professor">Prof</option>
                                        <option value="rev">Rev</option>
                                        <option value="captain">Capt</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>
                                    <input type="text" name="firstname" id="iFirstname" placeholder="First Name" style="width: 200px;" class="text-right" value="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>
                                    <input type="text" name="lastname" id="iLastname" placeholder="Last Name" style="width: 200px;" class="text-right" value="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>
                                    <input type="text" name="dateofbirth" id="iDateofbirth" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>
                                    <input type="radio" name="gender" id="gender" value="m">Male
                                    <input type="radio" name="gender" value="f">Female
                                </td>
                            </tr>                            
                        </tbody>
                    </table>

                    <br>

                    <table class="table table-striped table-dark" style="width: 365px; height: 350px;">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Adress:</td>
                                <td>
                                    <input type="text" name="adress" id="iAdress" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input type="text" name="email" id="iEmail" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Telephone:</td>
                                <td>
                                    <input type="text" name="telephone" id="iTelephone" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Mobile:</td>
                                <td>
                                    <input type="text" name="mobile" id="iMobile" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Emergency Contact:</td>
                                <td>
                                    <input type="text" name="econtact" id="iEcontact" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Relationship:</td>
                                <td>
                                    <input type="text" name="releationship" id="iReleationship" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-4">
                    <h2 class="bg-secondary font-weight-bold text-white text-center"><b>Qualification Grades</b></h2>
                    <hr>
                    <table class="table table-striped table-dark" style="width: 365px; height: 350px;">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Games:</td>
                                <td>
                                    <input type="text" name="games" id="iGames" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Animation:</td>
                                <td>
                                    <input type="text" name="animation" id="iAnimation" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>IT Business:</td>
                                <td>
                                    <input type="text" name="business" id="iBusiness" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Software Testing:</td>
                                <td>
                                    <input type="text" name="softwaretesting" id="iSoftwaretesting" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Object Oriented:</td>
                                <td>
                                    <input type="text" name="objectoriented" id="iObjectoriented" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Computer System:</td>
                                <td>
                                    <input type="text" name="computersystem" id="iComputersystem" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <table class="table table-striped table-dark" style="width: 365px; height: 315px;">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Project x 2:</td>
                                <td>
                                    <input type="text" name="project" id="iProject" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Total Score:</td>
                                <td>
                                    <input type="text" name="totalscore" id="iTotalscore" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Overall Average:</td>
                                <td>
                                    <input type="text" name="average" id="iAverage" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Clasification:</td>
                                <td>
                                    <input type="text" name="clasification" id="iClasification" style="width: 200px;" class="text-right" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="button" value="Reset" onclick="btnClear()" style="width: 120px; height: 54px; font-size: 60; border-radius: 8px;" class="btn btn-secondary">
                                </td>
                                <td>
                                    <input type="submit" onclick="btnResult()" style="height: 54px; border-radius: 8px;" class="btn btn-secondary btn-block" value="Academic Grade">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <h2 class="display-5 font-weight-bold text-white bg-secondary text-center">Student Management System</h2>
    </form>

</body>
</html>