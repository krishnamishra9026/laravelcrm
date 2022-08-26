<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\FaqQuestion;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\ShippingLogistic;
use App\Models\ImageGallery;
use App\Models\ContactusEnquiry;
use App\Models\StoreDistributor;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Models\Player;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Response;
class IndexController extends Controller
{
    public function index(){
        $faqQuestions = FaqQuestion::latest()->limit(6)->get();
        $testimonials = Testimonial::latest()->limit(5)->get();
        $imageGallery = ImageGallery::latest()->limit(9)->get();
        return view('frontend.index',compact('faqQuestions','testimonials','imageGallery'));
    }

    public function shippingLogistics(Request $request)
    {
        $shipping_logistic = ShippingLogistic::latest()->first();

        return view('frontend.shipping-logistics',compact('shipping_logistic'));
    }

    public function aboutUs(Request $request)
    {
        return view('frontend.about-us');
    }


    public function services(Request $request)
    {
        $service_tab1 = Service::find(1)->first();
        $service_tab2 = Service::find(2)->first();
        $service_tab3 = Service::find(3)->first();
        $service_tab4 = Service::find(4)->first();

        return view('frontend.services',compact('service_tab1','service_tab2','service_tab3','service_tab4'));
    }

    public function calculator(Request $request)
    {
        return view('frontend.calculator');
    }


    public function galleryPortfolio(Request $request)
    {
        return view('frontend.gallery-portfolio');
    }

    public function playerRegistration()
    {
        return view('frontend.player-registration');
    }

    public function storesDistributors()
    {
        return view('frontend.stores-distributors');
    }

    public function games()
    {
        return view('frontend.games');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function termsConditions()
    {
        return view('frontend.terms-conditions');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function playerRegistrationPost(Request $request)
    {
        $request->validate([
                'firstname'     => ['required', 'string', 'max:255'],
                'email'         => ['required', 'string', 'email', 'max:255', 'unique:players'],
                'mobile'        => ['required', 'max:11', 'min:10', 'unique:players'],
                'password'      => ['required', 'string', 'min:6']
            ]);

        $user = Player::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Your registration was succesfull, we will contact you shortly');   
    }

    public function storesDistributorsPost(Request $request)
    {

    $request->validate([
        'name'     => ['required', 'string', 'max:255'],
        'email'    => ['required', 'string', 'email', 'max:255'],
        // 'email'    => ['required', 'string', 'email', 'max:255', 'unique:store_distributors'],
        'mobile'        => ['required', 'max:12', 'min:10'],
        // 'mobile'        => ['required', 'max:11', 'min:10', 'unique:store_distributors'],
        'distributor'      => ['required'],
        'city'      => ['required'],
        'state'      => ['required'],
        'zip_code'      => ['required'],
        'message'      => ['required'],
    ]);

        $user = StoreDistributor::create([
            'name' => $request->name,
            'distributor' => $request->distributor,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your Store Distributor Enquiry submitted successfully!'); 
        
    }

    public function contactUsPost(Request $request)
    {        

    $request->validate([
        'name'     => ['required', 'string', 'max:255'],
        'email'    => ['required', 'string', 'email', 'max:255'],
        'mobile'        => ['required', 'max:12', 'min:10'],
        'message'      => ['required'],
        'subject'      => ['required'],
    ]);

        $user = ContactusEnquiry::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ]);

        return redirect()->back()->with('success', 'Your message was sent successfully, we will contact you shortly'); 
        
    
    }

    public function results($id){
        $enquiry = Enquiry::find($id);
        $enquiry->load('files');
        $base_url = URL::to('/');
        $path = $base_url.'/results'.'/'.$enquiry->id;
        return view('frontend.results',  compact('enquiry', 'path'));
    }

    public function downloadFile($id)
    {
        $file = File::find($id);
        $storedFile = Storage::disk('public')->path('/uploads/enquiries/' . $file->user_id . '/' . $file->enquiry_id . '/files' . '/' . $file->filename);
        return Response::download($storedFile);
    }
}
