Access api
===

I created this as a need to have upload capability over HTTP for purposes such as:

<ul>
  <li> Automated Uploads</li>
  <li> HTML5 Uploads</li>
  <li> Listing Functionality</li>
  <li> Anything else i can think of</li>
</ul>

<h3>Installation:</h3>

 <h4>Php Files</h4>
The files provided can be dropped into any folder, and are typically ready to be fired up at the given address

 <h4>DB Setup</h4>
 Provided is a stripped down version of a User table in the form of an sql. Users are authenticated using a key
 and secret. Md5 encryptionis preferred, but that is up to you.

 <h4>Index file</h4>
 Make a php file that calls autorun.php, or make a htaccess file that index.php == autorun.php. 
 
 <h4>Making Calls</h4>
 You can make calles using the states.php page, , the uri is provided as $uri, just run it agains logic commands.

<h3>HELP<h3>
 There are probably a million things wrong with this code, so why not help me. If you see anything, drop me a line.
 Commit to this GIT repo. or email me at justin.parton[at]gmail.com.
 
<h3>Assistance<h3>
 If you have questions, ask. I would love to help in any way that i can.
 
 - Justin Parton
