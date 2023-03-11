<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://i.imgur.com/6wj0hh6.jpg" alt="Project logo"></a>
</p>

<h3 align="center">Forsa tanya Task Refactoring Code</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/pulls)

</div>

---

<p align="center"> 

    It's a task from ForsaThanya Company talking about check and solve PHP code which has some issues. 
    <br> 
</p>

## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Deployment](#deployment)
- [Usage](#usage)
- [Built Using](#built_using)
- [TODO](../TODO.md)
- [Contributing](../CONTRIBUTING.md)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## 🧐 About <a name = "about"></a>

This is a PHP class called "ItemReader" that takes in a filename and a format as parameters in its constructor. It has a method called "readItems" which reads the content of the file and converts it into an array of "Item" objects based on the given format.

## 🏁 How good is this code and give a rate from 1 to 10? <a name = "getting_started"></a>

My rating to this code is 7/10.

### 🚀 Do you think the code quality has problems? if yes what are these problems?

Yes the code has a problems 

1 - In the previous ItemReader class, the XML file is parsed using the SimpleXMLElement class provided by PHP. This class converts the XML code to a PHP object, which can then be traversed and used to extract data.

2 - In the new version of the class, the XML file is parsed using a custom xmlRead class, which is not provided by PHP. It's not clear what the implementation of this class is, but it seems to provide a method getElements() that returns an array of objects representing the elements in the XML file. The objects seem to have properties like _id and item_name, which are used to extract data for the Item objects.

3 - The JSON parsing is the same in both classes, using json_decode() function to convert the JSON string to a PHP object or array.

4 - You are using Item Class which doesn't exist

5 - You are using InvalidFormatException Class which doesn't exist


### Installing

To install the previous code, you need to save it in a file with a .php extension and put it in a directory accessible by your web server.

Assuming you have Apache web server installed, you can place the file in the htdocs directory of your Apache installation. Then, you can access it in your web browser by navigating to http://localhost/index.php.

You can also use a PHP development environment like XAMPP or WAMP to create a local server for testing and development purposes. These environments come with Apache web server and PHP pre-installed and configured, so you just need to install them and place your PHP file in the htdocs directory of the installation.


```
http://localhost/Forsa%20Tanya%20Task/index.php
```

and you can change the format of the file and the name from ItemReader.


```
ItemReader('items.json', 'json');
ItemReader('items.xml', 'xml');
```

## ⛏️ Built Using <a name = "built_using"></a>

- [PHP](https://www.php.net/) - PHP

## ✍️ Authors <a name = "authors"></a>

- [@MohamedFahmy22](https://github.com/MohamedFahmy22) - Idea & Initial work

