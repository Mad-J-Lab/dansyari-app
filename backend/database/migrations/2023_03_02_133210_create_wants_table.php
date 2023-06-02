
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateWantsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("wants", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->string('name')->nullable();
						$table->bigInteger('category_id')->unsigned();
						$table->string('image_path')->nullable();
						$table->integer('number')->nullable();
						$table->string('category_name')->nullable();
						$table->integer('amount')->nullable();
						$table->string('place')->nullable();
						$table->string('purchase_from')->nullable();
						$table->timestamps();
						$table->foreign("category_id")->references("id")->on("categories");



						// ----------------------------------------------------
						// -- SELECT [wants]--
						// ----------------------------------------------------
						// $query = DB::table("wants")
						// ->leftJoin("categories","categories.id", "=", "wants.category_id")
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
                Schema::dropIfExists("wants");
            }
        }
    