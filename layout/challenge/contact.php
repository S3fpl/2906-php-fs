<?php

function contact($name, $phone): void
{
    echo "Name: $name, Phone: $phone\n";
}

contact(name: 'Ahmed', phone: 123456789);
contact(phone:987654321, name:'Sara');
contact('Hassan', 111222333);
contact(phone:555666777, name:'Nadia');
contact('Youssef', 999888777);
