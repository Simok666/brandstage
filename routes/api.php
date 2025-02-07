<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\API\Auth\AdminAuthController;
use App\Http\Controllers\Backend\API\Auth\AuthController;
use App\Http\Controllers\Backend\API\Sections\ApiEditController;
use App\Http\Controllers\Backend\PageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::post('admin/login', [AdminAuthController::class, 'login']);
    Route::get('getBlog/{slug}', [PageController::class, 'getBlog']);

    Route::post('user', [AuthController::class, 'getUserAccount'])->middleware('auth:sanctum');
});

Route::middleware(['auth:sanctum', 'type.admin'])->group(function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::get('admin/privacy', [ApiEditController::class, 'getPrivacy']);
        Route::Post('admin/addOrUpdatePrivacy', [ApiEditController::class, 'privacy']);

        Route::post('admin/deletePrivacy', [ApiEditController::class, 'deletePrivacy']);
        Route::post('admin/deleteTerms', [ApiEditController::class, 'deleteTerms']);


        Route::get('admin/terms', [ApiEditController::class, 'getTOS']);
        Route::Post('admin/addOrUpdateTerms', [ApiEditController::class, 'terms']);

        Route::get('admin/brandshero', [ApiEditController::class, 'getBrandsHero']);
        Route::Post('admin/addOrUpdateHero', [ApiEditController::class, 'brandsHero']);

        Route::get('admin/brandsSecondSection', [ApiEditController::class, 'getBrandsSecondSection']);
        Route::Post('admin/addOrUpdateSecondSection', [ApiEditController::class, 'brandsSecondSection']);

        Route::get('admin/brandsThirdSection', [ApiEditController::class, 'getBrandsThirdSection']);
        Route::Post('admin/addOrUpdateThirdSection', [ApiEditController::class, 'brandsThirdSection']);

        Route::get('admin/brandsFourthSectionHeadingButton', [ApiEditController::class, 'getBrandsFourthHeadingButton']);
        Route::Post('admin/addOrUpdateFourthSectionHeadingButton', [ApiEditController::class, 'brandsFourthSectionHeadingButton']);

        Route::get('admin/brandsFourthSectionIconDescription', [ApiEditController::class, 'getBrandsFourthIconDescription']);
        Route::Post('admin/addOrUpdateFourthSectionIconDescription', [ApiEditController::class, 'brandsFourthSectionIconDescription']);

        Route::get('admin/brandsFifthSection', [ApiEditController::class, 'getBrandsFifthSection']);
        Route::Post('admin/addOrUpdateFifthSection', [ApiEditController::class, 'brandsFifthSection']);

        Route::get('admin/brandsSixthSectionHeadingDescription', [ApiEditController::class, 'getBrandsSixthHeadingDescription']);
        Route::Post('admin/addOrUpdateSixthSectionHeadingDescription', [ApiEditController::class, 'brandsSixthHeadingDescription']);

        Route::get('admin/brandsSixthSectionFAQ', [ApiEditController::class, 'getBrandsSixthFAQ']);
        Route::Post('admin/addOrUpdateSixthSectionFAQ', [ApiEditController::class, 'brandsSixthFAQ']);

        Route::get('admin/spaceshero', [ApiEditController::class, 'getSpacesHero']);
        Route::Post('admin/addOrUpdateSpacesHero', [ApiEditController::class, 'spacesHero']);

        Route::get('admin/spacesSecondSectionHeadingDescription', [ApiEditController::class, 'getSpacesSecondHeadingDescription']);
        Route::Post('admin/addOrUpdateSpaceSecondSectionHeadingDescription', [ApiEditController::class, 'spacesSecondHeadingDescription']);

        Route::get('admin/spacesSecondSectionIconDescription', [ApiEditController::class, 'getSpacesSecondIconDescription']);
        Route::Post('admin/addOrUpdateSpacesSectionIconDescription', [ApiEditController::class, 'spacesSecondIconDescription']);

        Route::get('admin/spacesThirdSection', [ApiEditController::class, 'getSpacesThirdSection']);
        Route::Post('admin/addOrUpdateSpacesThirdSection', [ApiEditController::class, 'spacesThirdSection']);
        
        Route::get('admin/spacesFourthSection', [ApiEditController::class, 'getSpacesFourthSection']);
        Route::Post('admin/addOrUpdateSpacesFourthSection', [ApiEditController::class, 'spacesFourthSection']);
        
        Route::get('admin/spacesFifthSectionHeadingDescription', [ApiEditController::class, 'getSpacesFifthHeadingDescription']);
        Route::Post('admin/addOrUpdateSpacesFifthSectionHeadingDescription', [ApiEditController::class, 'spacesFifthHeadingDescription']);

        Route::get('admin/spacesFifthSectionFAQ', [ApiEditController::class, 'getSpacesFifthFAQ']);
        Route::Post('admin/addOrUpdateSpacesFifthSectionFAQ', [ApiEditController::class, 'spacesFifthFAQ']);

        Route::get('admin/abouthero', [ApiEditController::class, 'getAboutHero']);
        Route::Post('admin/addOrUpdateAboutHero', [ApiEditController::class, 'aboutHero']);

        Route::get('admin/aboutSecondSection', [ApiEditController::class, 'getAboutSecondSection']);
        Route::Post('admin/addOrUpdateAboutSecondSection', [ApiEditController::class, 'aboutSecondSection']);

        Route::get('admin/aboutThirdSectionHeadingDescription', [ApiEditController::class, 'getAboutThirdHeadingDescription']);
        Route::Post('admin/addOrUpdateAboutThirdSectionHeadingDescription', [ApiEditController::class, 'aboutThirdSectionHeadingDescription']);

        Route::get('admin/aboutThirdSectionIconDescription', [ApiEditController::class, 'getAboutThirdIconDescription']);
        Route::Post('admin/addOrUpdateAboutThirdSectionIconDescription', [ApiEditController::class, 'aboutThirdSectionIconDescription']);

        Route::get('admin/aboutFourthSection', [ApiEditController::class, 'getAboutFourthSection']);
        Route::Post('admin/addOrUpdateAboutFourthSection', [ApiEditController::class, 'aboutFourthSection']);

        Route::get('admin/insight', [ApiEditController::class, 'getInsight']);
        Route::Post('admin/addOrUpdateInsight', [ApiEditController::class, 'insight']);

        Route::get('admin/homeHeroHeadingDescription', [ApiEditController::class, 'getHomeHeroHeadingDescription']);
        Route::Post('admin/addOrUpdateHomeHeroHeadingDescription', [ApiEditController::class, 'homeHeroHeadingDescription']);

        Route::get('admin/homeHeroImageSlider', [ApiEditController::class, 'getHomeHeroImageSlider']);
        Route::Post('admin/addOrUpdateHomeHeroImageSlider', [ApiEditController::class, 'homeHeroImageSlider']);

        Route::get('admin/homeHeroSecondSection', [ApiEditController::class, 'getHomeSecondSection']);
        Route::Post('admin/addOrUpdateHomeSecondSection', [ApiEditController::class, 'homeSecondSection']);
        
        Route::get('admin/homeHeroThirdSection', [ApiEditController::class, 'getHomeThirdSection']);
        Route::Post('admin/addOrUpdateHomeThirdSection', [ApiEditController::class, 'homeThirdSection']);

        Route::get('admin/homeFifthSection', [ApiEditController::class, 'getHomeFifthSection']);
        Route::Post('admin/addOrUpdateHomeFifthSection', [ApiEditController::class, 'homeFifthSection']);

        Route::get('admin/homeFourthSection', [ApiEditController::class, 'getHomeFourthSection']);
        Route::Post('admin/addOrUpdateHomeFourthSection', [ApiEditController::class, 'homeFourthSection']);

        Route::get('admin/navbarSection', [ApiEditController::class, 'getNavbarSection']);
        Route::Post('admin/addOrUpdateNavbarSection', [ApiEditController::class, 'navbarSection']);

        Route::get('admin/navbarNavLink', [ApiEditController::class, 'getNavbarNavLink']);
        Route::Post('admin/addOrUpdateNavbarNavLink', [ApiEditController::class, 'navbarNavLink']);

        Route::get('admin/homeThirdHeadingSection', [ApiEditController::class, 'getHomeThirdHeadingSection']);
        Route::Post('admin/addOrUpdateHomeThirdHeading', [ApiEditController::class, 'homeThirdHeadingSection']);

        Route::get('admin/homeFourthHeadingSection', [ApiEditController::class, 'getHomeFourthHeadingSection']);
        Route::Post('admin/addOrUpdateHomeFourthHeading', [ApiEditController::class, 'homeFourthHeadingSection']);

    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
