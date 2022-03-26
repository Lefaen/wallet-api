<?php

namespace Database\Migration;

/**
 * Interface _Migration
 *
 * @author Pavel Parshin
 */
interface _Migration
{
    /**
     * @return void
     */
    public function up(): void;

    /**
     * @return void
     */
    public function down(): void;
}