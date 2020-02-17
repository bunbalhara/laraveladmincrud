<?php
namespace App\Exports;
use App\Models\Article;
use Maatwebsite\Excel\Concerns\FromCollection;
class ArticleExport implements FromCollection
{
    public function collection()
    {
        return Article::all();
    }
}
