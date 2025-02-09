<?php

namespace App\Http\Controllers\Backend\API\Sections;

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
use App\Models\HomeFifthSection;
use App\Models\HomeFourthSection;
use App\Models\NavbarSection;
use App\Models\NavbarNavLink;
use App\Models\HomeThirdHeadingSection;
use App\Models\HomeFourthHeadingSection;
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
use App\Http\Resources\HomeFourthHeadingSectionResource;
use App\Http\Resources\HomeThirdHeadingSectionResource;
use DB;

class ApiEditController extends Controller
{
    public function getPrivacy (Request $request, Privacy $privacy) {
        return PrivacyResource::collection(
            Privacy::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function deletePrivacy (Request $request) {
        
        try {
           
            $data = Privacy::where('id', $request->id);
            $data->delete();
            
            return response()->json([
                'message' => 'remove success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to remove documentation: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteTerms (Request $request) {
        
        try {
           
            $data = Terms::where('id', $request->id);
            $data->delete();
            
            return response()->json([
                'message' => 'remove success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to remove documentation: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteAboutHero (Request $request) {
        
        try {
           
            $data = AboutHero::where('id', $request->id);
            $data->delete();
            
            return response()->json([
                'message' => 'remove success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to remove documentation: ' . $e->getMessage()
            ], 500);
        }
    }

    public function privacy(Request $request, Privacy $privacy) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($privacy) {
            
              $privacy = $privacy::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                    //   'key' => $item['key'],
                    //   'heading' => $item['heading'],
                      'list_heading' => $item['list_heading'],
                      'list_description' => $item['list_description'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'Privacy has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }


    public function getTOS (Request $request, Terms $terms) {
        return TermsResource::collection(
            Terms::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function terms(Request $request, Terms $terms) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($terms) {
            
              $terms = $terms::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'list_heading' => $item['list_heading'],
                      'list_description' => $item['list_description'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'Terms has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsHero (Request $request, BrandsHero $brandsHero) {
        return BrandsHeroResource::collection(
            BrandsHero::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function brandsHero(Request $request, BrandsHero $brandsHero) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsHero) {
              $brandsHero = $brandsHero::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

              if($images_heroes = $item['hero_image']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsHero->clearMediaCollection('hero_image');
                    $brandsHero->addMedia($image_hero)->toMediaCollection('hero_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Terms has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsSecondSection (Request $request, BrandsSecondSection $brandsSecondSection) {
        return BrandsSecondSectionResource::collection(
            BrandsSecondSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function brandsSecondSection(Request $request, BrandsSecondSection $brandsSecondSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsSecondSection) {
            
              $brandsSecondSection = $brandsSecondSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading_first_text' => $item['heading_first_text'],
                      'heading_strong_text' => $item['heading_strong_text'],
                      'heading_second_text' => $item['heading_second_text'],
                      'heading_underlined_first_text' => $item['heading_underlined_first_text'],
                      'heading_third_text' => $item['heading_third_text'],
                      'heading_underlined_second_text' => $item['heading_underlined_second_text'],
                      'heading_fourth_text' => $item['heading_fourth_text'],
                      'description' => $item['description'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

            if($images_heroes = $item['first_image']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('first_image');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('first_image');
                }
            }

            if($images_heroes = $item['second_image']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('second_image');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('second_image');
                }
            }
            
            if($images_heroes = $item['third_image']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('third_image');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('third_image');
                }
            }

            if($images_heroes = $item['icon_image_1']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('icon_image_1');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_1');
                }
            }

            if($images_heroes = $item['icon_image_2']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('icon_image_2');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_2');
                }
            }

            if($images_heroes = $item['icon_image_3']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('icon_image_3');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_3');
                }
            }

            if($images_heroes = $item['icon_image_4']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('icon_image_4');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_4');
                }
            }

            if($images_heroes = $item['icon_image_5']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('icon_image_5');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_5');
                }
            }

            if($images_heroes = $item['icon_image_6']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('icon_image_6');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_6');
                }
            }

            if($images_heroes = $item['icon_image_7']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsSecondSection->clearMediaCollection('icon_image_7');
                    $brandsSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_7');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Brands Second Section has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsThirdSection (Request $request, BrandThirdSection $brandsThirdSection) {
        return BrandsThirdSectionResource::collection(
            BrandThirdSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function brandsThirdSection(Request $request, BrandThirdSection $brandsThirdSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsThirdSection) {
            
              $brandsThirdSection = $brandsThirdSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'vertical_text' => $item['vertical_text'],
                      'description' => $item['description'],
                  ]
              );

            if($images_heroes = $item['phone_video']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('phone_video');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('phone_video');
                }
            }

            if($images_heroes = $item['phone_image']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('phone_image');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('phone_image');
                }
            }
            
            if($images_heroes = $item['icon_image_1']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_1');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_1');
                }
            }

            if($images_heroes = $item['icon_image_2']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_2');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_2');
                }
            }

            if($images_heroes = $item['icon_image_3']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_3');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_3');
                }
            }

            if($images_heroes = $item['icon_image_4']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_4');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_4');
                }
            }

            if($images_heroes = $item['icon_image_5']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_5');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_5');
                }
            }

            if($images_heroes = $item['icon_image_6']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_6');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_6');
                }
            }

            if($images_heroes = $item['icon_image_7']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_7');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_7');
                }
            }
            
            if($images_heroes = $item['icon_image_8']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsThirdSection->clearMediaCollection('icon_image_8');
                    $brandsThirdSection->addMedia($image_hero)->toMediaCollection('icon_image_8');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Brands Third Section has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsFourthHeadingButton (Request $request, BrandsFourthSectionHeadingButton $brandsFourthSectionHeadingButton) {
        return BrandsFourthSectionHeadingButtonResource::collection(
            BrandsFourthSectionHeadingButton::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function brandsFourthSectionHeadingButton(Request $request, BrandsFourthSectionHeadingButton $brandsFourthSectionHeadingButton) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsFourthSectionHeadingButton) {
            
              $brandsFourthSectionHeadingButton = $brandsFourthSectionHeadingButton::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsFourthIconDescription (Request $request, BrandsFourthSectionIconDescription $brandsFourthSectionIconDescription) {
        return BrandsFourthSectionIconDescriptionResource::collection(
            BrandsFourthSectionIconDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function brandsFourthSectionIconDescription(Request $request, BrandsFourthSectionIconDescription $brandsFourthSectionIconDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsFourthSectionIconDescription) {
              $brandsFourthSectionIconDescription = $brandsFourthSectionIconDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

              if($images_heroes = $item['icon_image']) {
                foreach ($images_heroes as $image_hero) {
                    $brandsFourthSectionIconDescription->clearMediaCollection('icon_image');
                    $brandsFourthSectionIconDescription->addMedia($image_hero)->toMediaCollection('icon_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsFifthSection (Request $request, BrandsFifthSection $brandsFifthSection) {
        return BrandsFifthSectionResource::collection(
            BrandsFifthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function brandsFifthSection(Request $request, BrandsFifthSection $brandsFifthSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsFifthSection) {
            
              $brandsFifthSection = $brandsFifthSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsSixthHeadingDescription (Request $request, BrandsSixthSectionHeadingDescription $brandsSixthSectionHeadingDescription) {
        return BrandsSixthSectionHeadingDescriptionResource::collection(
            BrandsSixthSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function brandsSixthHeadingDescription(Request $request, BrandsSixthSectionHeadingDescription $brandsSixthSectionHeadingDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsSixthSectionHeadingDescription) {
            
              $brandsSixthSectionHeadingDescription = $brandsSixthSectionHeadingDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getBrandsSixthFAQ (Request $request, BrandsSixthSectionFAQ $BrandsSixthSectionFAQ) {
        return BrandsSixthSectionFAQResource::collection(
            BrandsSixthSectionFAQ::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function brandsSixthFAQ(Request $request, BrandsSixthSectionFAQ $brandsSixthSectionFAQ) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($brandsSixthSectionFAQ) {
            
              $brandsSixthSectionFAQ = $brandsSixthSectionFAQ::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'question' => $item['question'],
                      'answer' => $item['answer'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getSpacesHero (Request $request, SpaceHero $spaceHero) {
        return SpacesHeroResource::collection(
            SpaceHero::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function spacesHero(Request $request, SpaceHero $spaceHero) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($spaceHero) {
              $spaceHero = $spaceHero::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

              if($images_heroes = $item['hero_image']) {
                foreach ($images_heroes as $image_hero) {
                    $spaceHero->clearMediaCollection('hero_image');
                    $spaceHero->addMedia($image_hero)->toMediaCollection('hero_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getSpacesSecondHeadingDescription (Request $request, SpaceSecondSectionHeadingDescription $spaceSecondSectionHeadingDescription) {
        return SpacesSecondSectionHeadingDescriptionResource::collection(
            SpaceSecondSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function spacesSecondHeadingDescription(Request $request, SpaceSecondSectionHeadingDescription $spaceSecondSectionHeadingDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($spaceSecondSectionHeadingDescription) {
            
              $spaceSecondSectionHeadingDescription = $spaceSecondSectionHeadingDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getSpacesSecondIconDescription (Request $request, SpaceSecondSectionIconDescription $SpaceSecondSectionIconDescription) {
        return SpacesSecondSectionIconDescriptionResource::collection(
            SpaceSecondSectionIconDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function spacesSecondIconDescription(Request $request, SpaceSecondSectionIconDescription $spaceSecondSectionIconDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($spaceSecondSectionIconDescription) {
            
              $spaceSecondSectionIconDescription = $spaceSecondSectionIconDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

              if($images_heroes = $item['icon_image']) {
                foreach ($images_heroes as $image_hero) {
                    $spaceSecondSectionIconDescription->clearMediaCollection('icon_image');
                    $spaceSecondSectionIconDescription->addMedia($image_hero)->toMediaCollection('icon_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getSpacesThirdSection (Request $request, SpaceThirdSection $spaceThirdSection) {
        return SpacesThirdSectionResource::collection(
            SpaceThirdSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function spacesThirdSection(Request $request, SpaceThirdSection $spaceThirdSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($spaceThirdSection) {
              $spaceThirdSection = $spaceThirdSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

              if($images_heroes = $item['hero_image']) {
                foreach ($images_heroes as $image_hero) {
                    $spaceThirdSection->clearMediaCollection('hero_image');
                    $spaceThirdSection->addMedia($image_hero)->toMediaCollection('hero_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getSpacesFourthSection (Request $request, SpaceFourthSection $spaceFourthSection) {
        return SpacesFourthSectionResource::collection(
            SpaceFourthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function spacesFourthSection(Request $request, SpaceFourthSection $spaceFourthSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($spaceFourthSection) {
            
              $spaceFourthSection = $spaceFourthSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getSpacesFifthHeadingDescription (Request $request, SpaceFifthSectionHeadingDescription $spaceFifthSectionHeadingDescription) {
        return SpacesFifthSectionHeadingDescriptionResource::collection(
            SpaceFifthSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function spacesFifthHeadingDescription(Request $request, SpaceFifthSectionHeadingDescription $spaceFifthSectionHeadingDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($spaceFifthSectionHeadingDescription) {
            
              $spaceFifthSectionHeadingDescription = $spaceFifthSectionHeadingDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getSpacesFifthFAQ (Request $request, SpaceFifthSectionFAQ $spaceFifthSectionFAQ) {
        return SpacesFifthSectionFAQResource::collection(
            SpaceFifthSectionFAQ::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function spacesFifthFAQ(Request $request, SpaceFifthSectionFAQ $spaceFifthSectionFAQ) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($spaceFifthSectionFAQ) {
            
              $spaceFifthSectionFAQ = $spaceFifthSectionFAQ::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'question' => $item['question'],
                      'answer' => $item['answer'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getAboutHero (Request $request, AboutHero $aboutHero) {
        return AboutHeroResource::collection(
            AboutHero::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function aboutHero(Request $request, AboutHero $aboutHero) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($aboutHero) {
              $aboutHero = $aboutHero::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

              if($images_heroes = $item['left_image']) {
                foreach ($images_heroes as $image_hero) {
                    $aboutHero->clearMediaCollection('left_image');
                    $aboutHero->addMedia($image_hero)->toMediaCollection('left_image');
                }
            }

            if($images_heroes = $item['right_image']) {
                foreach ($images_heroes as $image_hero) {
                    $aboutHero->clearMediaCollection('right_image');
                    $aboutHero->addMedia($image_hero)->toMediaCollection('right_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getAboutSecondSection (Request $request, AboutSecondSection $aboutSecondSection) {
        return AboutSecondSectionResource::collection(
            AboutSecondSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function aboutSecondSection(Request $request, AboutSecondSection $aboutSecondSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($aboutSecondSection) {
            
              $aboutSecondSection = $aboutSecondSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading_first_text' => $item['heading_first_text'],
                    //   'heading_strong_text' => $item['heading_strong_text'],
                    //   'heading_second_text' => $item['heading_second_text'],
                    //   'heading_underlined_first_text' => $item['heading_underlined_first_text'],
                    //   'heading_third_text' => $item['heading_third_text'],
                    //   'heading_underlined_second_text' => $item['heading_underlined_second_text'],
                    //   'heading_fourth_text' => $item['heading_fourth_text'],
                      'description' => $item['description'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

            if($images_heroes = $item['first_image']) {
                foreach ($images_heroes as $image_hero) {
                    $aboutSecondSection->clearMediaCollection('first_image');
                    $aboutSecondSection->addMedia($image_hero)->toMediaCollection('first_image');
                }
            }

            // if($images_heroes = $item['second_image']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('second_image');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('second_image');
            //     }
            // }
            
            // if($images_heroes = $item['third_image']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('third_image');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('third_image');
            //     }
            // }

            // if($images_heroes = $item['icon_image_1']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('icon_image_1');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_1');
            //     }
            // }

            // if($images_heroes = $item['icon_image_2']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('icon_image_2');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_2');
            //     }
            // }

            // if($images_heroes = $item['icon_image_3']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('icon_image_3');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_3');
            //     }
            // }

            // if($images_heroes = $item['icon_image_4']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('icon_image_4');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_4');
            //     }
            // }

            // if($images_heroes = $item['icon_image_5']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('icon_image_5');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_5');
            //     }
            // }

            // if($images_heroes = $item['icon_image_6']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('icon_image_6');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_6');
            //     }
            // }

            // if($images_heroes = $item['icon_image_7']) {
            //     foreach ($images_heroes as $image_hero) {
            //         $aboutSecondSection->clearMediaCollection('icon_image_7');
            //         $aboutSecondSection->addMedia($image_hero)->toMediaCollection('icon_image_7');
            //     }
            // }

          DB::commit();
          });
          return response()->json(['message' => 'Brands Second Section has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getAboutThirdHeadingDescription (Request $request, AboutThirdSectionHeadingDescription $aboutThirdSectionHeadingDescription) {
        return AboutThirdHeadingDescriptionResource::collection(
            AboutThirdSectionHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function aboutThirdSectionHeadingDescription(Request $request, AboutThirdSectionHeadingDescription $aboutThirdSectionHeadingDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($aboutThirdSectionHeadingDescription) {
            
              $aboutThirdSectionHeadingDescription = $aboutThirdSectionHeadingDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getAboutThirdIconDescription (Request $request, AboutThirdSectionIconDescription $aboutThirdSectionIconDescription) {
        return AboutThirdIconDescriptionResource::collection(
            AboutThirdSectionIconDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function aboutThirdSectionIconDescription(Request $request, AboutThirdSectionIconDescription $aboutThirdSectionIconDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($aboutThirdSectionIconDescription) {
              $aboutThirdSectionIconDescription = $aboutThirdSectionIconDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

              if($images_heroes = $item['icon_image']) {
                foreach ($images_heroes as $image_hero) {
                    $aboutThirdSectionIconDescription->clearMediaCollection('icon_image');
                    $aboutThirdSectionIconDescription->addMedia($image_hero)->toMediaCollection('icon_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getAboutFourthSection (Request $request, AboutFourthSection $aboutFourthSection) {
        return AboutFourthSectionResource::collection(
            AboutFourthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function aboutFourthSection(Request $request, AboutFourthSection $aboutFourthSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($aboutFourthSection) {
            
              $aboutFourthSection = $aboutFourthSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                      'email_text' => $item['email_text'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'Privacy has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }


    public function getInsight (Request $request, InsightSection $insightSection) {
        return InsightSectionResource::collection(
            InsightSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function insight(Request $request, InsightSection $insightSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($insightSection) {
            $description = $item['description'];
            
            // Suppress warnings and use error handling
            libxml_use_internal_errors(true);
            
            $dom = new \DomDocument('1.0', 'UTF-8');
            $dom->encoding = 'UTF-8';
            
            // Wrap content in a safe root element
            $description = '<?xml encoding="UTF-8"><root>' . $description . '</root>';
            
            // Attempt to load HTML with error suppression
            $dom->loadHTML($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR | LIBXML_NOWARNING);
            
            // Clear any libxml errors
            libxml_clear_errors();
            
            $images = $dom->getElementsByTagName('img');

            $uploadPath = public_path('uploads'); 

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true); 
            }

            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');

                if (strpos($data, 'data:image') === 0) { 
                    list($type, $data) = explode(';', $data);
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);

                    $image_name = time() . $k . '.png';
                    $path = $uploadPath . '/' . $image_name; 

                    file_put_contents($path, $data); 

                    $img->removeAttribute('src');
                    $img->setAttribute('src', asset('uploads/' . $image_name)); 
                }
            }

            // Extract only the content inside the root element
            $description = $dom->saveHTML($dom->getElementsByTagName('root')[0]);
            
            // Remove the added root element tags
            $description = preg_replace(['/<\/?root>/', '/^<!DOCTYPE[^>]+>/'], '', $description);
           
            $insightSection = $insightSection::updateOrCreate(
                [
                    'id' => $item['id'] ?? null,
                ],
                [
                    'title' => $item['title'],
                    'description' => trim($description),
                    'published_by' => $item['published_by'],
                    'blog_slug' => $item['blog_slug'],
                ]
            );

            if($images_heroes = $item['blog_image']) {
                foreach ($images_heroes as $image_hero) {
                    $insightSection->clearMediaCollection('blog_image');
                    $insightSection->addMedia($image_hero)->toMediaCollection('blog_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Terms has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeHeroHeadingDescription (Request $request, HomeHeroHeadingDescription $homeHeroHeadingDescription) {
        return HomeHeroHeadingDescriptionResource::collection(
            HomeHeroHeadingDescription::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function homeHeroHeadingDescription(Request $request, HomeHeroHeadingDescription $homeHeroHeadingDescription) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeHeroHeadingDescription) {
            
              $homeHeroHeadingDescription = $homeHeroHeadingDescription::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading_first' => $item['heading_first'],
                      'heading_middle' => $item['heading_middle'] ?? null,
                      'heading_third' => $item['heading_third'] ?? null,
                      'description' => $item['description'],
                      'button_title' => $item['button_title'],
                      'button_link' => $item['button_link'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeHeroImageSlider (Request $request, HomeHeroImageSlider $homeHeroImageSlider) {
        return HomeHeroImageSliderResource::collection(
            HomeHeroImageSlider::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function homeHeroImageSlider(Request $request, HomeHeroImageSlider $homeHeroImageSlider) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeHeroImageSlider) {
              $homeHeroImageSlider = $homeHeroImageSlider::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'name' => $item['name'],
                  ]
              );

              if($images_heroes = $item['image_slider']) {
                foreach ($images_heroes as $image_hero) {
                    $homeHeroImageSlider->clearMediaCollection('image_slider');
                    $homeHeroImageSlider->addMedia($image_hero)->toMediaCollection('image_slider');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeSecondSection (Request $request, HomeSecondSection $homeSecondSection) {
        return HomeSecondSectionResource::collection(
            HomeSecondSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function homeSecondSection(Request $request, HomeSecondSection $homeSecondSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeSecondSection) {
              $homeSecondSection = $homeSecondSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading'],
                      'description' => $item['description'],
                  ]
              );

              if($images_heroes = $item['icon_image']) {
                foreach ($images_heroes as $image_hero) {
                    $homeSecondSection->clearMediaCollection('icon_image');
                    $homeSecondSection->addMedia($image_hero)->toMediaCollection('icon_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Terms has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeThirdSection (Request $request, HomeThirdSection $homeThirdSection) {
        return HomeThirdSectionResource::collection(
            HomeThirdSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function homeThirdSection(Request $request, HomeThirdSection $homeThirdSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeThirdSection) {
              $homeThirdSection = $homeThirdSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'image_title' => $item['image_title'],
                  ]
              );

              if($images_heroes = $item['image_grid']) {
                foreach ($images_heroes as $image_hero) {
                    $homeThirdSection->clearMediaCollection('image_grid');
                    $homeThirdSection->addMedia($image_hero)->toMediaCollection('image_grid');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Terms has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeFifthSection (Request $request, HomeFifthSection $homeFifthSection) {
        return HomeFifthResource::collection(
            HomeFifthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function homeFifthSection(Request $request, HomeFifthSection $homeFifthSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeFifthSection) {
              $homeFifthSection = $homeFifthSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'title' => $item['title'],
                      'blog_link' => $item['blog_link'],
                  ]
              );

              if($images_heroes = $item['blog_image']) {
                foreach ($images_heroes as $image_hero) {
                    $homeFifthSection->clearMediaCollection('blog_image');
                    $homeFifthSection->addMedia($image_hero)->toMediaCollection('blog_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Terms has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeFourthSection (Request $request, HomeFourthSection $homeFourthSection) {
        return HomeFourthSectionResource::collection(
            HomeFourthSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    
    public function homeFourthSection(Request $request, HomeFourthSection $homeFourthSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeFourthSection) {
              $homeFourthSection = $homeFourthSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'first_title' => $item['first_title'],
                      'second_title' => $item['second_title'],
                  ]
              );

              if($images_heroes = $item['blog_image']) {
                foreach ($images_heroes as $image_hero) {
                    $homeFourthSection->clearMediaCollection('blog_image');
                    $homeFourthSection->addMedia($image_hero)->toMediaCollection('blog_image');
                }
            }

          DB::commit();
          });
          return response()->json(['message' => 'Terms has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getNavbarSection (Request $request, NavbarSection $navbarSection) {
        return NavbarSectionResource::collection(
            NavbarSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function navbarSection (Request $request, NavbarSection $navbarSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($navbarSection) {
              $navbarSection = $navbarSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'logo_text' => $item['logo_text'],
                  ]
              ); 

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getNavbarNavLink (Request $request, NavbarNavlink $navbarNavlink) {
        return NavbarNavLinkResource::collection(
            NavbarNavlink::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function navbarNavLink (Request $request, NavbarNavlink $navbarNavlink) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($navbarNavlink) {
              $navbarNavlink = $navbarNavlink::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'navlink_title' => $item['navlink_title'],
                      'navlink_link' => $item['navlink_link'],
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeThirdHeadingSection (Request $request, HomeThirdHeadingSection $homeThirdHeadingSection) {
        return HomeThirdHeadingSectionResource::collection(
            HomeThirdHeadingSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function homeThirdHeadingSection (Request $request, HomeThirdHeadingSection $homeThirdHeadingSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeThirdHeadingSection) {
              $homeThirdHeadingSection = $homeThirdHeadingSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading']
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }

    public function getHomeFourthHeadingSection (Request $request, HomeFourthHeadingSection $homeFourthHeadingSection) {
        return HomeFourthHeadingSectionResource::collection(
            HomeFourthHeadingSection::when(request()->filled("id"), function ($query){
                $query->where('id', request("id"));
            })->paginate($request->limit ?? "10")
        );
    }

    public function homeFourthHeadingSection (Request $request, HomeFourthHeadingSection $homeFourthHeadingSection) {
        try {
          DB::beginTransaction();   
          $data = collect($request->repeater)->map(function ($item) use ($homeFourthHeadingSection) {
              $homeFourthHeadingSection = $homeFourthHeadingSection::updateOrCreate(
                  [
                      'id' => $item['id'] ?? null,
                  ],
                  [
                      'heading' => $item['heading']
                  ]
              );

          DB::commit();
          });
          return response()->json(['message' => 'data has been created or updated successfully'], 201);
        } catch(\Illuminate\Database\QueryException $ex) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred creating data: ' . $ex->getMessage()], 400);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while creating data: ' . $e->getMessage()], 400);
        }
    }
}
