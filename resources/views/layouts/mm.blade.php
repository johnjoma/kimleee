Schema::create('posts', function (Blueprint $table) {
            $table->string('email');
            $table->string('name');
            $table->string('message');
            $table->timestamp('created_at');
        });