<?php
    
    /**
     * In order to use code in another file - I need to require it !
     * If I need to use many files - I need to use many require declerations!
     * Messy and difficult to maintain.
     * 
     * SOLUTION: Configure PHP to load class files automatically on demand by using 
     * the autoload function.
     * 
     * How PHP create classes?
     * 
     * $product = new Product():
     * 
     *      If class exist - create the object
     *      Else:
     *             Run the autoload function: 
     *                  If exists - create the object
     *                   Else - Fatal Error -class 'Product'Does not found 
     * 
     * How to use the autoload() function ?
     * 
     *  Use the spl_autload_register() function - passing in a function that 
     *  will run the autoloader is needed: 
     * 
     * spl_autoload_register(fnction ($className)
     * {
     *  require "$classnName.php";
     * })
     * 
     * 
     * IMPORTANT: 
     * I can pass a function that includes the namespace: 
     * 
     *      namesapce App; 
     *      class Product
     *      {
     * 
     *      }
     *  
     *  $product = new App\Product(); 
     * 
     * spl_autoload_register( function $(class)
     * {
     *  $file = str_replace('\', '/' , $class); 
     *  require "$file.php"; 
     * } ); 
     * 
     * It will work if I put the class file in the folder with the same of the 
     * the class namespace!
     */
   require 'Product.php'; 

   $product = new Product(); 

   //echo get_class($product); 








    // namespace Html;
    // include "Html\Table.php"; 
    // include "Html\Row.php"; 

    /** 
     * Because this code in contained in the namespace Html 
     * and I include "Html\Table.php" php file I can create instances
     * of the Table class by using new Table() only!
    */
    
    

?>