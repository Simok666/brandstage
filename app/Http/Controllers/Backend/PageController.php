<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;
use App\Models\Terms;
use App\Models\BrandsHero;
use App\Models\BrandsSecondSection;
use App\Models\BrandThirdSection;
use App\Models\BrandsFourthSectionHeadingButton;
use App\Models\BrandsFourthSectionIconDescription;
use App\Models\BrandsFifthSection;
use App\Models\BrandsSixthSectionFAQ;
use App\Models\BrandsSixthSectionHeadingDescription;
use App\Models\SpaceHero;
use App\Models\SpaceSecondSectionHeadingDescription;
use App\Models\SpaceSecondSectionIconDescription;
use App\Models\SpaceThirdSection;
use App\Models\SpaceFourthSection;
use App\Models\SpaceFifthSectionFAQ;
use App\Models\SpaceFifthSectionHeadingDescription;
use App\Models\AboutHero;
use App\Models\AboutSecondSection;
use App\Models\AboutThirdSectionHeadingDescription;
use App\Models\AboutThirdSectionIconDescription;
use App\Models\AboutFourthSection;
use App\Models\InsightSection;
use App\Models\HomeHeroHeadingDescription;
use App\Models\HomeHeroImageSlider;
use App\Models\HomeSecondSection;
use App\Models\HomeThirdSection;
use App\Models\HomeFourthSection;
use App\Models\HomeFifthSection;
use App\Models\NavbarSection;
use App\Models\NavbarNavLink;
use App\Http\Resources\PrivacyResource;
use App\Http\Resources\TermsResource;
use App\Http\Resources\BrandsHeroResource;
use App\Http\Resources\BrandsSecondSectionResource;
use App\Http\Resources\BrandsThirdSectionResource;
use App\Http\Resources\BrandsFourthSectionHeadingButtonResource;
use App\Http\Resources\BrandsFourthSectionIconDescriptionResource;
use App\Http\Resources\BrandsSixthSectionFAQResource;
use App\Http\Resources\BrandsSixthSectionHeadingDescriptionResource;
use App\Http\Resources\BrandsFifthSectionResource;
use App\Http\Resources\SpacesHeroResource;
use App\Http\Resources\SpacesSecondSectionHeadingDescriptionResource;
use App\Http\Resources\SpacesSecondSectionIconDescriptionResource;
use App\Http\Resources\SpacesThirdSectionResource;
use App\Http\Resources\SpacesFourthSectionResource;
use App\Http\Resources\SpacesFifthSectionFAQResource;
use App\Http\Resources\SpacesFifthSectionHeadingDescriptionResource;
use App\Http\Resources\AboutHeroResource;
use App\Http\Resources\AboutSecondSectionResource;
use App\Http\Resources\AboutThirdHeadingDescriptionResource;
use App\Http\Resources\AboutThirdIconDescriptionResource;
use App\Http\Resources\AboutFourthSectionResource;
use App\Http\Resources\InsightSectionResource;
use App\Http\Resources\HomeHeroHeadingDescriptionResource;
use App\Http\Resources\HomeHeroImageSliderResource;
use App\Http\Resources\HomeSecondSectionResource;
use App\Http\Resources\HomeThirdSectionResource;
use App\Http\Resources\HomeFifthResource;
use App\Http\Resources\HomeFourthSectionResource;
use App\Http\Resources\NavbarSectionResource;
use App\Http\Resources\NavbarNavLinkResource;
use DB;

class PageController extends Controller
{
    public function privacysection(Request $request, Terms $terms, Privacy $privacyy) {
        $dataPrivacy = PrivacyResource::collection(
            Privacy::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataTerms = TermsResource::collection(
            Terms::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        return view('privacy', compact('dataPrivacy', 'dataTerms'));
    }

    public function brandsection (Request $request, 
     BrandsHero $brandsHero,
     BrandsSecondSection $brandsSecondSection, 
     BrandThirdSection $brandThirdSection) {
       $brandHero = BrandsHeroResource::collection(
            BrandsHero::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

      $brandSecondSection = BrandsSecondSectionResource::collection(
            BrandsSecondSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

      $brandThirdSection = BrandsThirdSectionResource::collection(
            BrandThirdSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

      $brandsFourthSectionHeadingButton = BrandsFourthSectionHeadingButtonResource::collection(
            BrandsFourthSectionHeadingButton::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

      $brandsFourthSectionIconDescription = BrandsFourthSectionIconDescriptionResource::collection(
            BrandsFourthSectionIconDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

       $brandsFifthSection = BrandsFifthSectionResource::collection(
            BrandsFifthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

       $brandsSixthSectionHeadingDescription = BrandsSixthSectionHeadingDescriptionResource::collection(
            BrandsSixthSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $brandsSixthSectionFAQ = BrandsSixthSectionFAQResource::collection(
            BrandsSixthSectionFAQ::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        return view('brands', compact('brandHero',
         'brandSecondSection', 'brandThirdSection', 
         'brandsFourthSectionHeadingButton', 'brandsFourthSectionIconDescription',
         'brandsFifthSection', 'brandsSixthSectionHeadingDescription',
         'brandsSixthSectionFAQ'));
    }

    public function spacesection(Request $request) {
       $dataSpaceHero = SpacesHeroResource::collection(
            SpaceHero::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataSpaceSecondSectionHeading = SpacesSecondSectionHeadingDescriptionResource::collection(
            SpaceSecondSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataSpaceSecondSectionIcon = SpacesSecondSectionIconDescriptionResource::collection(
            SpaceSecondSectionIconDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

       $dataSpaceThirdSection =  SpacesThirdSectionResource::collection(
            SpaceThirdSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataSpaceFourthSection = SpacesFourthSectionResource::collection(
            SpaceFourthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataSpaceFifthSectionHeading =  SpacesFifthSectionHeadingDescriptionResource::collection(
            SpaceFifthSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataSpaceFifthSectionFAQ = SpacesFifthSectionFAQResource::collection(
            SpaceFifthSectionFAQ::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        return view('findSpace', compact('dataSpaceHero', 
        'dataSpaceSecondSectionHeading',
        'dataSpaceSecondSectionIcon',
        'dataSpaceThirdSection',
        'dataSpaceFourthSection',
        'dataSpaceFifthSectionHeading',
        'dataSpaceFifthSectionFAQ'
        ));
    }

    public function aboutsection(Request $request) {
        $dataAboutHero = AboutHeroResource::collection(
            AboutHero::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataAboutSecond = AboutSecondSectionResource::collection(
            AboutSecondSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

       $dataAboutThirdHeading = AboutThirdHeadingDescriptionResource::collection(
            AboutThirdSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataAboutThirdIcon = AboutThirdIconDescriptionResource::collection(
            AboutThirdSectionIconDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataAboutFourthSection = AboutFourthSectionResource::collection(
            AboutFourthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        return view('about', compact('dataAboutHero', 
        'dataAboutSecond',
        'dataAboutThirdHeading',
        'dataAboutThirdIcon',
        'dataAboutFourthSection',
        ));
    }

    public function insightsection(Request $request) {
        $limit = $request->input('limit', 9);
        $page = $request->input('page', 1);

        $query = InsightSection::query();

        if ($request->filled('id')) {
            $query->where('id', $request->input('id'));
        }

        $paginatedInsights = $query->paginate($limit, ['*'], 'page', $page);

        $dataInsight = InsightSectionResource::collection($paginatedInsights);

        return view('insights', [
            'dataInsight' => $dataInsight,
            'pagination' => [
                'current_page' => $paginatedInsights->currentPage(),
                'total_pages' => $paginatedInsights->lastPage(),
                'total_items' => $paginatedInsights->total(),
                'per_page' => $paginatedInsights->perPage(),
                'has_more_pages' => $paginatedInsights->hasMorePages(),
                'first_item' => $paginatedInsights->firstItem(),
                'last_item' => $paginatedInsights->lastItem(),
            ]
        ]);
    }

    public function homesection(Request $request) {
        
        $navbarNavLink = NavbarNavLinkResource::collection(
            NavbarNavLink::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $navbarSection = NavbarSectionResource::collection(
            NavbarSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataHomeHeroHeading = HomeHeroHeadingDescriptionResource::collection(
            HomeHeroHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
        
        $dataHomeHeroImageSlider = HomeHeroImageSliderResource::collection(
            HomeHeroImageSlider::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataHomeSecondSection = HomeSecondSectionResource::collection(
            HomeSecondSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $dataHomeThirdSection = HomeThirdSectionResource::collection(
            HomeThirdSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $homeFourthSection = HomeFourthSectionResource::collection(
            HomeFourthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $homeFifthSection = HomeFifthResource::collection(
            HomeFifthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
        

        return view('home', compact('navbarNavLink','navbarSection','dataHomeHeroHeading', 
        'dataHomeHeroImageSlider',
        'dataHomeSecondSection',
        'dataHomeThirdSection',
        'homeFourthSection',
        'homeFifthSection'));
    }

    public function navbarsection(Request $request) {
        $navbarNavLink = NavbarNavLinkResource::collection(
            NavbarNavLink::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        $navbarSection = NavbarSectionResource::collection(
            NavbarSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );

        return view('privacy', compact('navbarNavLink', 'navbarSection'));
    }

    /**
     * function get single content
     * 
     * @param Request $request
     * @param Contributor $contributor
     */
    public function getBlog (Request $request) {
        $slugContent = $request->slug;
        $content = InsightSection::where('blog_slug', $slugContent)
                ->first();
    
        return new InsightSectionResource($content);
    }


}
