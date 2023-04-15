<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
use App\Models\User; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $spiderman=new User;
        $spiderman->ID=1;
        $spiderman->name="Spiderman";
        $spiderman->real_name="Peter Parker";
        $spiderman->gender="male";
        $spiderman->universeID=4; 
        $spiderman->email="spiderman@hotmail.com";
        $spiderman->passwords=Hash::make("Pass123");
        $spiderman->save(); 

        $hulk=new User;
        $hulk->ID=2; 
        $hulk->name="HULK";
        $hulk->real_name="Bruce Banner";
        $hulk->gender="male";
        $hulk->universeID=4;
        $hulk->email="hulk@hotmail.com";
        $hulk->password=Hash::make("Pass123");
        $hulk->save();

        $cap=new User;
        $cap->ID=3;
        $cap->name="Capitan America";
        $cap->real_name="Steve Rogers"; 
        $cap->gender="male";
        $cap->universeID=4;
        $cap->email="capitan@hotmail.com";
        $cap->password=Hash::make("Pass123");
        $cap->save();

        $superman=new User;
        $superman->ID=4;
        $superman->name="Superman";
        $superman->real_name="Clark Kentt";
        $superman->gender="male";
        $superman->universeID=2;
        $superman->email="superman@hotmail.com";
        $superman->password=Hash::make("Pass123"); 
        $superman->save();

        $bat=new User;
        $bat->ID=5;
        $bat->name="Batman";
        $bat->real_name="Bruce Wayne";
        $bat->gender="male";
        $bat->universeID=1;
        $bat->email="batman@hotmail.com";
        $bat->password=Hash::make("Pass123");
        $bat->save();

        $ben=new User;
        $ben->ID=6;
        $ben->name="Scarlet Spider";
        $ben->real_name="Ben Reilly";
        $ben->gender="male";
        $ben->universeID=5;
        $ben->email="scarlet@hotmail.com";
        $ben->password=Hash::make("Pass123");
        $ben->save(); 

        $ww=new User;
        $ww->ID=7;
        $ww->name="Wonder Woman"; 
        $ww->real_name="Diana Prince";
        $ww->gender="female";
        $ww->universeID=1;
        $ww->email="wonderwoman@hotmail.com";
        $ww->password=Hash::make("Pass123"); 
        $ww->save(); 

        $doom=new User;
        $doom->ID=8;
        $doom->name="Doomsday";
        $doom->real_name="unknow";
        $doom->gender="unknow";
        $doom->universeID=3;
        $doom->email="doomsdat@hotmail.com";
        $doom->password=Hash::make("Pass123");
        $doom->save(); 

        $scarlet=new User;
        $scarlet->ID=9;
        $scarlet->name="Scarlet witch";
        $scarlet->real_name="Wanda Maximoff";
        $scarlet->gender="female";
        $scarlet->universeID=5;
        $scarlet->email="wanda@hotmail.com";
        $scarlet->password=Hash::make("Pass123"); 
        $scarlet->save();

        $wing=new User;
        $wing->name="Nigth Wing";
        $wing->real_name="Dick Grayson";
        $wing->gender="male";
        $wing->universeID=3;
        $wing->email="grayson@hotmail.com";
        $wing->password=Hash::make("Pass123");
        $scarlet->save();
    }
}
