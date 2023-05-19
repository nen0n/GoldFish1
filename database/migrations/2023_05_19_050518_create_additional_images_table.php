<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('additional_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->BigInteger('product_id');
        });
    

		DB::table('additional_images')->insert([
			[
				'product_id' => 1,
				'image_path' => 'src/product_photos/8gje4n9he8hu17fctja2u8wyc1trh57x.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src/product_photos/8gje4n9he8hu17fctja2u8wyc1trh57x.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src/product_photos/8gje4n9he8hu17fctja2u8wyc1trh57x.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src/product_photos/8gje4n9he8hu17fctja2u8wyc1trh57x.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src/product_photos/8gje4n9he8hu17fctja2u8wyc1trh57x.jpg',
			],
			
			
			
			[
				'product_id' => 2,
				'image_path' => 'src/product_photos/lvm2n10a7xjx4np4176qk2nvw22av3kh.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src/product_photos/lvm2n10a7xjx4np4176qk2nvw22av3kh.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src/product_photos/lvm2n10a7xjx4np4176qk2nvw22av3kh.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src/product_photos/lvm2n10a7xjx4np4176qk2nvw22av3kh.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src/product_photos/lvm2n10a7xjx4np4176qk2nvw22av3kh.jpg',
			],



			[
				'product_id' => 3,
				'image_path' => 'src/product_photos/sot5dkdtl9kl9ocpdud7hz8whudmswvv.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src/product_photos/sot5dkdtl9kl9ocpdud7hz8whudmswvv.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src/product_photos/sot5dkdtl9kl9ocpdud7hz8whudmswvv.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src/product_photos/sot5dkdtl9kl9ocpdud7hz8whudmswvv.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src/product_photos/sot5dkdtl9kl9ocpdud7hz8whudmswvv.jpg',
			],



			[
				'product_id' => 4,
				'image_path' => 'src/product_photos/rvh14tkr57ozs2e33l3z7307gdtrxzzc.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src/product_photos/rvh14tkr57ozs2e33l3z7307gdtrxzzc.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src/product_photos/rvh14tkr57ozs2e33l3z7307gdtrxzzc.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src/product_photos/rvh14tkr57ozs2e33l3z7307gdtrxzzc.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src/product_photos/rvh14tkr57ozs2e33l3z7307gdtrxzzc.jpg',
			],



			[
				'product_id' => 5,
				'image_path' => 'src/product_photos/cyev3ui0wcl51neq7bmu6b6hgp3doide.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src/product_photos/cyev3ui0wcl51neq7bmu6b6hgp3doide.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src/product_photos/cyev3ui0wcl51neq7bmu6b6hgp3doide.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src/product_photos/cyev3ui0wcl51neq7bmu6b6hgp3doide.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src/product_photos/cyev3ui0wcl51neq7bmu6b6hgp3doide.jpg',
			],


			[
				'product_id' => 6,
				'image_path' => 'src/product_photos/gd5stwjhzteukr04pkphran02srcxxda.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src/product_photos/gd5stwjhzteukr04pkphran02srcxxda.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src/product_photos/gd5stwjhzteukr04pkphran02srcxxda.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src/product_photos/gd5stwjhzteukr04pkphran02srcxxda.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src/product_photos/gd5stwjhzteukr04pkphran02srcxxda.jpg',
			],


			[
				'product_id' => 7,
				'image_path' => 'src/product_photos/190euvle0wy5r9n2nxnd4iuhtiygcjmb.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src/product_photos/190euvle0wy5r9n2nxnd4iuhtiygcjmb.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src/product_photos/190euvle0wy5r9n2nxnd4iuhtiygcjmb.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src/product_photos/190euvle0wy5r9n2nxnd4iuhtiygcjmb.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src/product_photos/190euvle0wy5r9n2nxnd4iuhtiygcjmb.jpg',
			],
		
		]);
	}	

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_images');
    }
};
