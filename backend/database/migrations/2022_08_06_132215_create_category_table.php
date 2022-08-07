
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateCategoryTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("category", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->string('name')->nullable();
						$table->timestamps();



						// ----------------------------------------------------
						// -- SELECT [category]--
						// ----------------------------------------------------
						// $query = DB::table("category")
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
                Schema::dropIfExists("category");
            }
        }
    