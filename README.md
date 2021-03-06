# spidert2

#Overview of the project
--------------------------------------------------
1.In this project the main aim is to perform various operations on a student database.
2.First we download the required software for our project as stated in the build instructions below.
3.Then we create a page which has options to add and view a student.
4.In the add student page,we are required to enter the basic details such as name,roll number,email address,physical address,department and about the student with some certain validations which should be met by the data we enter.
5.After the data is validated,a randomised passcode has to be displayed to the user and the data along with the passcode has to be stored into the MySQL database.
6.Now in the view student page the details of a student have to be retrieved by using the roll number of the student.
7.In this page an option to edit the details except roll number is to be provided along with the student details 
8.This is the basic idea of adding,viewingand editing a database

#Build Instructions
---------------------------------------------------
1. Download PHP, Apache and MySQL for your system
      1.Link to download XAMPP for windows. [XAMPP](https://sourceforge.net/projects/xampp/?source=directory)
      2.For linux [LAMP](https://bitnami.com/stack/lamp/installer)
2.Clone the github repo ''git clone https://github.com/Sainss/spidert2.git''

Screenshots of my website

 The opening page


![mainpage](https://cloud.githubusercontent.com/assets/19251508/16239445/7fc86be8-3802-11e6-89c2-abe6ef95922d.jpg)



Name validation

![wrongname](https://cloud.githubusercontent.com/assets/19251508/16035852/e5c56b2a-3236-11e6-83fc-94140d0ca48e.jpg)

Email validation

![wrongemail](https://cloud.githubusercontent.com/assets/19251508/16035936/484cbe38-3237-11e6-9be3-202d099466d3.jpg)

Roll number validation

![wrongroll](https://cloud.githubusercontent.com/assets/19251508/16036012/9cf22c02-3237-11e6-898b-b66e544798d8.JPG)

Address validation

![address](https://cloud.githubusercontent.com/assets/19251508/16036017/a3238256-3237-11e6-8f94-5cffbb60fc90.jpg)

Final form after filling in details

![completed form](https://cloud.githubusercontent.com/assets/19251508/16173004/53f86fb0-35b2-11e6-8d6c-27e98bb6b876.jpg)

If roll no. is same

![sameroll](https://cloud.githubusercontent.com/assets/19251508/16173026/e2f8737c-35b2-11e6-9048-07bbc1505a62.jpg)

Passcode display

![passcode](https://cloud.githubusercontent.com/assets/19251508/16173020/c4117134-35b2-11e6-9c4a-114993725f1d.jpg)

The data stored in mysql along with passkey

![mysql1](https://cloud.githubusercontent.com/assets/19251508/16172963/185ad818-35b1-11e6-9780-13d672fd268b.jpg)

 View student page


![view](https://cloud.githubusercontent.com/assets/19251508/16173117/a5a7905a-35b4-11e6-8af5-6e9ba34bd379.jpg)

Enter valid roll number 


![correctroll](https://cloud.githubusercontent.com/assets/19251508/16173129/edc34fd2-35b4-11e6-89fe-8d7ccf8bf60b.jpg)


Displaying result


![viewing](https://cloud.githubusercontent.com/assets/19251508/16173118/abe75360-35b4-11e6-9f10-2fd4d7079301.jpg)


Invalid roll number


![wrongno](https://cloud.githubusercontent.com/assets/19251508/16173123/cb61656e-35b4-11e6-989d-21a4dc1ecdc2.jpg)


Its result


![res](https://cloud.githubusercontent.com/assets/19251508/16173127/d1fa9670-35b4-11e6-9722-8f0274fbcd3b.jpg)


View page with edit button

![with edit button](https://cloud.githubusercontent.com/assets/19251508/16203580/8bbd483a-3738-11e6-9d63-0595390d7eea.jpg)

If correct combination of roll no. and passscode are entered then a page like this will appear

![correctpassroll](https://cloud.githubusercontent.com/assets/19251508/16203686/1098f784-3739-11e6-92e1-fbf209c5814e.jpg)

If incorrect combination of roll no. and passscode are entered then a page like this will appear

![wrongrollpass](https://cloud.githubusercontent.com/assets/19251508/16203762/710a9208-3739-11e6-920c-3487f13e2268.jpg)


The database before editing

![beforeupd](https://cloud.githubusercontent.com/assets/19251508/16227926/5e93179c-37d1-11e6-800a-fb0ac6b460f8.jpg)

Edited form

![edited](https://cloud.githubusercontent.com/assets/19251508/16227760/4808ce3c-37d0-11e6-898b-7d149e35f18c.jpg)

Page appearing after we press update

![succ](https://cloud.githubusercontent.com/assets/19251508/16227807/a1c3da20-37d0-11e6-81c0-f65325fe830c.jpg)

The updated data in the database

![afterupd](https://cloud.githubusercontent.com/assets/19251508/16227872/062aa912-37d1-11e6-8163-5965e33324c2.jpg)

When the view all students on main page is clicked

![viewall](https://cloud.githubusercontent.com/assets/19251508/16236890/8dca3d76-37f7-11e6-87b7-d8bdabd67877.jpg)


When the view by department button is clicked on main page

![deptpage](https://cloud.githubusercontent.com/assets/19251508/16358102/5f076a26-3b27-11e6-9161-34d19497e417.jpg)


After a department is entered in this page

![sorted](https://cloud.githubusercontent.com/assets/19251508/16239462/942b3f20-3802-11e6-8b48-8531e0b77b8c.jpg)
