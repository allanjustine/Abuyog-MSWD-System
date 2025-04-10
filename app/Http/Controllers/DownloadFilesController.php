<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class DownloadFilesController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new class implements FromView {
            public function view(): View
            {
                $beneficiaries = Beneficiary::with(['barangay', 'service'])->get();
                return view('exports.beneficiaries', compact('beneficiaries'));
            }
        }, 'beneficiaries.xlsx');
    }

    public function exportWord()
    {
        $beneficiaries = Beneficiary::with(['barangay', 'service'])->get();
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        foreach ($beneficiaries as $b) {
            $section->addText("Name: {$b->first_name} {$b->middle_name} {$b->last_name} {$b->suffix}");
            $section->addText("DOB: {$b->date_of_birth}, Age: {$b->age}");
            $section->addText("Gender: {$b->gender}, Civil Status: {$b->civil_status}");
            $section->addText("Address: {$b->complete_address}, Barangay: " . ($b->barangay->name ?? ''));
            $section->addText("Occupation: {$b->occupation}, Religion: {$b->religion}");
            $section->addText("Program Enrolled: {$b->service->name}");
            $section->addText("Phone: {$b->phone}, Email: {$b->email}");
            $section->addText("Income: Monthly - {$b->monthly_income}, Annual - {$b->annual_income}");
            $section->addText("Approved At: {$b->approved_at}, Appearance Date: {$b->appearance_date}");
            $section->addText("Status: {$b->status}, Message Count: {$b->message_count}");
            $section->addText("-------------------------------------------------------------");
        }

        $tempFile = tempnam(sys_get_temp_dir(), 'word');
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($tempFile);

        return response()->download($tempFile, 'beneficiaries.docx')->deleteFileAfterSend(true);
    }
}
