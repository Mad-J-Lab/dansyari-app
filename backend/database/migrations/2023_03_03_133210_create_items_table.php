
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateItemsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("items", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name')->nullable();
						$table->bigInteger('category_id')->nullable()->unsigned();
						$table->integer('is_unnecessary')->nullable();
						$table->string('image_path')->nullable();
						$table->integer('number')->nullable();
						$table->string('category_name')->nullable();
						$table->integer('amount')->nullable();
						$table->string('place')->nullable();
						$table->string('purchase_from')->nullable();
						$table->timestamps();
						$table->foreign("category_id")->references("id")->on("categories");



						// ----------------------------------------------------
						// -- SELECT [items]--
						// ----------------------------------------------------
						// $query = DB::table("items")
						// ->leftJoin("categories","categories.id", "=", "items.category_id")
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
                Schema::dropIfExists("items");
            }
        }
    