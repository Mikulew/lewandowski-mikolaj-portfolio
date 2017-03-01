<?php

use Illuminate\Database\Seeder;
use App\Technology;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $technology = new Technology();
        $technology->name = "HTML5";
        $technology->thumbnail = "HTML5.svg";
        $technology->save();
        
        //2
        $technology = new Technology();
        $technology->name = "CSS3";
        $technology->thumbnail = "CSS3.svg";
        $technology->save();
        
        //3
        $technology = new Technology();
        $technology->name = "SASS";
        $technology->thumbnail = "SASS.svg";
        $technology->save();
        
        //4
        $technology = new Technology();
        $technology->name = "LESS";
        $technology->thumbnail = "less.svg";
        $technology->save();
        
        //5
        $technology = new Technology();
        $technology->name = "stylus";
        $technology->thumbnail = "stylus.svg";
        $technology->save();
        
        //6
        $technology = new Technology();
        $technology->name = "RWD";
        $technology->thumbnail = "RWD.svg";
        $technology->save();
        
        //7
        $technology = new Technology();
        $technology->name = "JavaScript";
        $technology->thumbnail = "JavaScript.svg";
        $technology->save();
        
        //8
        $technology = new Technology();
        $technology->name = "Canvas";
        $technology->thumbnail = "canvas.svg";
        $technology->save();
                
        //9
        $technology = new Technology();
        $technology->name = "EcmaScript6";
        $technology->thumbnail = "EcmaScript6.svg";
        $technology->save();
        
        //10
        $technology = new Technology();
        $technology->name = "TypeScript";
        $technology->thumbnail = "TypeScript.svg";
        $technology->save();
        
        //11
        $technology = new Technology();
        $technology->name = "CoffeeScript";
        $technology->thumbnail = "CoffeeScript.svg";
        $technology->save(); 
        
        //12
        $technology = new Technology();
        $technology->name = "Babel";
        $technology->thumbnail = "babel.svg";
        $technology->save(); 
        
        //13
        $technology = new Technology();
        $technology->name = "jQuery";
        $technology->thumbnail = "jQuery.svg";
        $technology->save();
        
        //14
        $technology = new Technology();
        $technology->name = "AJAX";
        $technology->thumbnail = "AJAX.svg";
        $technology->save();
        
         //15
        $technology = new Technology();
        $technology->name = "Bootstrap";
        $technology->thumbnail = "Bootstrap.svg";
        $technology->save();
        
        //16
        $technology = new Technology();
        $technology->name = "Foundation";
        $technology->thumbnail = "foundation.svg";
        $technology->save();
        
        //17
        $technology = new Technology();
        $technology->name = "Semantic UI";
        $technology->thumbnail = "SemanticUI.svg";
        $technology->save();
               
        //18
        $technology = new Technology();
        $technology->name = "gulp.js";
        $technology->thumbnail = "gulp.svg";
        $technology->save();
        
        //19
        $technology = new Technology();
        $technology->name = "grunt.js";
        $technology->thumbnail = "grunt.svg";
        $technology->save();
        
        //20
        $technology = new Technology();
        $technology->name = "Webpack";
        $technology->thumbnail = "webpack.svg";
        $technology->save();
        
        //21
        $technology = new Technology();
        $technology->name = "Require.js";
        $technology->thumbnail = "require.svg";
        $technology->save();
        
        //22
        $technology = new Technology();
        $technology->name = "Browserify";
        $technology->thumbnail = "browserify.svg";
        $technology->save();
                
        //23
        $technology = new Technology();
        $technology->name = "React.js";
        $technology->thumbnail = "react.svg";
        $technology->save();
        
        //24
        $technology = new Technology();
        $technology->name = "Angular.js";
        $technology->thumbnail = "angular.svg";
        $technology->save();
        
        //25
        $technology = new Technology();
        $technology->name = "Vue.js";
        $technology->thumbnail = "vue.svg";
        $technology->save();
        
        //26
        $technology = new Technology();
        $technology->name = "Backbone.js";
        $technology->thumbnail = "backbone.svg";
        $technology->save();
        
        //27
        $technology = new Technology();
        $technology->name = "Ember.js";
        $technology->thumbnail = "ember.svg";
        $technology->save();
        
        //28
        $technology = new Technology();
        $technology->name = "Knockout";
        $technology->thumbnail = "knockout.svg";
        $technology->save();
        
        //29
        $technology = new Technology();
        $technology->name = "d3.js";
        $technology->thumbnail = "d3.svg";
        $technology->save();
        
        //30
        $technology = new Technology();
        $technology->name = "p5.js";
        $technology->thumbnail = "p5.svg";
        $technology->save();
     
        //31
        $technology = new Technology();
        $technology->name = "node.js";
        $technology->thumbnail = "node.svg";
        $technology->save();
        
        //32
        $technology = new Technology();
        $technology->name = "express.js";
        $technology->thumbnail = "express.svg";
        $technology->save();
        
        //33
        $technology = new Technology();
        $technology->name = "keystone.js";
        $technology->thumbnail = "keystone.svg";
        $technology->save();
        
        //34
        $technology = new Technology();
        $technology->name = "meteor.js";
        $technology->thumbnail = "meteor.svg";
        $technology->save();
        
        //35
        $technology = new Technology();
        $technology->name = "PHP";
        $technology->thumbnail = "php.svg";
        $technology->save();
        
        //36
        $technology = new Technology();
        $technology->name = "Laravel";
        $technology->thumbnail = "laravel.svg";
        $technology->save();
        
        //37 
        $technology = new Technology();
        $technology->name = "Symfony";
        $technology->thumbnail = "symfony.svg";
        $technology->save();
        
        //38
        $technology = new Technology();
        $technology->name = "MySQL";
        $technology->thumbnail = "MySQL.svg";
        $technology->save();
        
        //39
        $technology = new Technology();
        $technology->name = "MongoDB";
        $technology->thumbnail = "mongoDB.svg";
        $technology->save();
        
        //40
        $technology = new Technology();
        $technology->name = "GIT";
        $technology->thumbnail = "git.svg";
        $technology->save();
        
        //41
        $technology = new Technology();
        $technology->name = "GitHub";
        $technology->thumbnail = "GitHub.svg";
        $technology->save();
        
        //42
        $technology = new Technology();
        $technology->name = "Photoshop";
        $technology->thumbnail = "PS.svg";
        $technology->save();
        
        //43
        $technology = new Technology();
        $technology->name = "Illustrator";
        $technology->thumbnail = "AI.svg";
        $technology->save();
        
        //44
        $technology = new Technology();
        $technology->name = "InDesign";
        $technology->thumbnail = "ID.svg";
        $technology->save();
        
        //45
        $technology = new Technology();
        $technology->name = "Pro Premiere";
        $technology->thumbnail = "premiere.svg";
        $technology->save();

        //46
        $technology = new Technology();
        $technology->name = "After Effects";
        $technology->thumbnail = "ae.svg";
        $technology->save();
        
        //47
        $technology = new Technology();
        $technology->name = "UI/UX Design";
        $technology->thumbnail = "uxui.svg";
        $technology->save();
        
        //48
        $technology = new Technology();
        $technology->name = "MVC";
        $technology->thumbnail = "MVC.svg";
        $technology->save();
        
        //49
        $technology = new Technology();
        $technology->name = "CRUD";
        $technology->thumbnail = "CRUD.svg";
        $technology->save();
        
        //50
        $technology = new Technology();
        $technology->name = "ACL";
        $technology->thumbnail = "ACL.svg";
        $technology->save();
        
        //51
        $technology = new Technology();
        $technology->name = "RESTful API";
        $technology->thumbnail = "REST.svg";
        $technology->save();
        
        //52
        $technology = new Technology();
        $technology->name = "BEM";
        $technology->thumbnail = "BEM.svg";
        $technology->save();
        
        //53
        $technology = new Technology();
        $technology->name = "SMACSS";
        $technology->thumbnail = "SMACSS.svg";
        $technology->save();
        
        //54
        $technology = new Technology();
        $technology->name = "OOCSS";
        $technology->thumbnail = "OOCSS.svg";
        $technology->save();
    }
}
