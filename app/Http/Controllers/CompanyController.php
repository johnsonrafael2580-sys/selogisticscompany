public function index()
{
    // Mfano wa kuchukua data kutoka kwenye Database
    $company = \App\Models\Company::first(); 
    $values = \App\Models\CoreValue::all(); // Hakikisha una model ya CoreValue
    
    return view('overview', [
        'company' => $company,
        'values' => $values,
        'page_title' => 'Company Overview',
        'about' => (object)[
            'title' => 'Redefining Logistics in East Africa',
            'description' => 'SE Global Logistics Company Limited is a premier clearing and forwarding firm...',
            'image' => 'public/assets/images/about_img.jpg'
        ]
    ]);
}