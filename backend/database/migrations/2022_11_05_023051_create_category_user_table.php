
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateCategoryUserTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("category_user", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('category_id')->unsigned();
						$table->integer('user_id')->unsigned();
						

                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        $table->foreign("category_id")->references("id")->on("categories");
						$table->foreign("user_id")->references("id")->on("users");



						// ----------------------------------------------------
						// -- SELECT [category_user]--
						// ----------------------------------------------------
						// $query = DB::table("category_user")
						// ->leftJoin("categories","categories.id", "=", "category_user.category_id")
						// ->leftJoin("users","users.id", "=", "category_user.user_id")
						// ->get();
						// dd($query); //For checking



                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("category_user");
            }
        }
    