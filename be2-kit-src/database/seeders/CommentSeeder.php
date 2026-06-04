<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->delete();

        DB::table('comments')->insert([
            [
                'product_id' => 1,
                'content' => 'Sản phẩm đẹp, đóng gói cẩn thận.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'content' => 'Máy dùng mượt, pin ổn.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'content' => 'Giá tốt, giao hàng nhanh.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'content' => 'Camera chụp rất rõ.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
