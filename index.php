<?php
ini_set('memory_limit', '256M');
require __DIR__ . '/ElectronicItems.php';
require __DIR__ . '/Console.php';
require __DIR__ . '/Microwave.php';
require __DIR__ . '/Television.php';
require __DIR__ . '/Controller.php';


try{

    
    
    //set up a shopping cart
    $cart = array();

    //set up the products



    //create a console item and sets it's price
    $console = new Console();
    $console->setPrice(20.0);

    //create a controller item and sets its price and wire status
    $controller = new Controller();
    $controller->setPrice(10.0);
    $controller->setWired(true);


    //add 2 wired controllers to the console item
    $console->setExtras($controller);
    $console->setExtras($controller);


    //wireless controllers should cost differently
    $controller->setPrice(12.0);
    $controller->setWired(false);

    //add 2 wireless controllers to the console item
    $console->setExtras($controller);
    $console->setExtras($controller);

    //add the console to the shopping cart
    array_push($cart, $console);


    //create a television item and sets its price
    $television = new Television();
    $television->setPrice(100.0);
    
    //set up the tv remote controller. those are always wireless.
    $controller->setPrice(8.0);
    $controller->setWired(false);

    //add 2 remote controllers to the television
    $television->setExtras($controller);
    $television->setExtras($controller);

    //add the first television to the shopping cart
    array_push($cart, $television);

    //set up the second television
    $television = new Television();
    $television->setPrice(120.25);


    //add one wireless controller to the new television
    $television->setExtras($controller);

    //add the second television to the shopping cart
    array_push($cart, $television);

    //create a microwave item and set its price
    $microwave = new Microwave();
    $microwave->setPrice(99.99);

    //add the microwave to the shopping cart
    array_push($cart,$microwave);

    //add all the extra items (controllers) to the shopping cart
    foreach($cart as $electronic_item){
        foreach($electronic_item->getExtras() as $extra){
            array_push($cart, $extra);
        }
    }


    //create a list of all electronic items put on cart
    $items = new ElectronicItems($cart);

    //sort all electronic items by price
    $sorted_items = $items->getSortedItems();

    //print them to screen
    /*
    foreach($sorted_items as $s_item){
        echo(json_encode($s_item)) . PHP_EOL;
    } 
    */

    //get total price of all items
    $total_price = 0.0;

    foreach($cart as $item){
        $total_price += $item->getPrice();
    }

    echo("Total price is $" . $total_price) . PHP_EOL;


    //get total price only for the console and its extras
    echo "Console with extras cost $" . $console->totalPrice() . PHP_EOL;



}catch(Exception $e){
    echo $e->getMessage();
}
