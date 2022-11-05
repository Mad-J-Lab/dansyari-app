
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
						$table->integer('category_id');
						$table->integer('user_id');



						// ----------------------------------------------------
						// -- SELECT [category_user]--
						// ----------------------------------------------------
						// $query = DB::table("category_user")
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
    