<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    public function up()
    {
        // Bảng users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->unique();
            $table->string('password_hash', 255);
            $table->string('email', 100)->unique();
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->enum('role', ['admin', 'customer'])->default('customer');
            $table->timestamps();
        });

        // Bảng categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Laravel mặc định dùng 'id' làm khóa chính
            $table->string('name', 255)->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Bảng products
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(0);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });

        // Bảng product_images
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->text('image_url');
            $table->boolean('is_primary')->default(false);
            $table->timestamps();
        });

        // Bảng favorites
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });

        // Bảng reviews
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('rating');
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        // Bảng orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['Pending', 'Processing', 'Completed', 'Cancelled'])->default('Pending');
            $table->timestamps();
        });

        // Bảng order_details
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamp('return_date')->nullable(); // Cho phép null
            $table->timestamps();
        });

        // Bảng payments
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('payment_method', 50);
            $table->enum('status', ['Pending', 'Paid', 'Failed'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
    }
}
