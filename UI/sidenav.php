<?php
//  $utype=$_SESSION["utype"];
$utype="Admin";
 ?>
<div class='col-xl-2 col-lg-3 pt-5 sidenav'>
    <ul class='pb-5 cat' style='list-style: none; font-size: 18px; padding-left: 10px;'>
    <?php if($utype=="Student")
    {
        echo "
        <li>
            <img src='images/course_50px.png' width='10%'> COURSES
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='mycourses.php' id='mycour'><img src='images/course_50px.png' width='8%'> Following Courses</a>
                </li>
                <li>
                    <a href='othercourse.php' id='othercs'><img src='images/course_50px.png' width='8%'> Recommended Courses</a>
                </li>
                <hr>
            </ul>
        </li>";
    }?>
    <?php if($utype=="Admin")
        {
            echo "
            <li>
            <img src='images/User Groups_50px.png' width='10%'> MEMBERS
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='memberUpdate.php' id='mycour'><img src='images/edit_member_50px.png' width='8%'> Members Settings</a>
                </li>
                <hr>
            </ul>
        </li>";
        }?>
        <?php if($utype=="Moderator" || $utype=="Admin")
        {
            echo "
            <li>
            <img src='images/course_50px.png' width='10%'> COURSES
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='moderCourseView.php' id='mycour'><img src='images/view_courses_50px.png' width='8%'> View Courses</a>
                </li>
                <li>
                    <a href='addCourse.php' id='addcrs'><img src='images/add_course_50px.png' width='8%'> Add Courses</a>
                </li>
                <hr>
            </ul>
        </li>
        <li>
            <img src='images/exam_50px.png' width='10%'> EXAMS
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='addExams.php' id='addExam'><img src='images/add_exam_50px.png' width='8%'> Add Exams</a>
                </li>
                <hr>
            </ul>
        </li>
        ";
        }?>
    </ul>
</div>