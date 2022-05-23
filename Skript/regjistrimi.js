var part_1;
var part_2;
var part_3;

function next1() 
{
    var part_1 = document.getElementById("part1");
    var part_2 = document.getElementById("part2");
    var part_3 = document.getElementById("part3");
    
    part_1.style.display = "none";
    part_2.style.display = "block";
    part_3.style.display = "none";
    
}

function back1() 
{
    var part_1 = document.getElementById("part1");
    var part_2 = document.getElementById("part2");
    var part_3 = document.getElementById("part3");

    part_1.style.display = "block";
    part_2.style.display = "none";
    part_3.style.display = "none";
    
}

function next2() 
{
    var part_1 = document.getElementById("part1");
    var part_2 = document.getElementById("part2");
    var part_3 = document.getElementById("part3");
    
    part_1.style.display = "none";
    part_2.style.display = "none";
    part_3.style.display = "block";
    
}

function back2() 
{
    var part_1 = document.getElementById("part1");
    var part_2 = document.getElementById("part2");
    var part_3 = document.getElementById("part3");

    part_1.style.display = "none";
    part_2.style.display = "block";
    part_3.style.display = "none";
    
}