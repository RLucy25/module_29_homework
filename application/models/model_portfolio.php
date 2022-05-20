<?php
class Model_Portfolio extends Model
{
    public function get_data()
    {
       return array(
           array(
               'Year'=> '2021',
               'Site'=> 'https://github.com/RLucy25/module5_homework',
               'Description'=> 'Обо мне'
           ),
           array(
            'Year'=> '2021',
            'Site'=> 'https://rlucy25.github.io/module_11_homework/',
            'Description'=> 'Игра угадайка'
        ), 
        );
    }
}
