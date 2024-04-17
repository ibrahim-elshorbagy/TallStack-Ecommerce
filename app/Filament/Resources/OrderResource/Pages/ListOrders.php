<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStats::class
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'New  Orders' => Tab::make()->query(fn($query) => $query-> where('status', 'new')),
            'Processing Orders'=>  Tab::make()->query(fn($query) => $query-> where('status', 'processing')) ,
            'Shipped Orders'=>  Tab::make()->query(fn($query) => $query-> where('status', 'shipped')) ,
            'Delivered Orders'=>  Tab::make()->query(fn($query) => $query-> where('status', 'delivered')) ,
            'Cancelled Orders'=>  Tab::make()->query(fn($query) => $query-> where('status', 'cancelled')) ,
        ];
    }

}
