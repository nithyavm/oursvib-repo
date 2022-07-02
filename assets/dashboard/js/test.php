  <?php
  
  public function update(Request $request, $webmasterId, $id)
    {

        // $data['request']= $request;
        // $data['webmasterId']= $webmasterId;
        // $data['id']= $id;
        // return $data;
       // foreach (Helper::languagesList() as $ActiveLanguage) {
      
       // }
      
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (!empty($WebmasterSection)) {
            //
            $Topic = Topic::find($id);
            if (!empty($Topic)) {

               
                $this->validate($request, [
                    'photo_file' => 'mimes:png,jpeg,jpg,gif,svg',
                    'audio_file' => 'mimes:mpga,wav', // mpga = mp3
                    'video_file' => 'mimes:mp4,ogv,webm'
                ]);


                // Start of Upload Files
                $formFileName = "photo_file";
                $fileFinalName = "";
                if ($request->$formFileName != "") {
                    // Delete a Topic photo
                    if ($Topic->$formFileName != "") {
                        File::delete($this->uploadPath . $Topic->$formFileName);
                    }

                    $fileFinalName = time() . rand(1111,
                            9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                    $path = $this->uploadPath;
                    $request->file($formFileName)->move($path, $fileFinalName);
                }


                $formFileName = "audio_file";
                $audioFileFinalName = "";
                if ($request->$formFileName != "") {
                    // Delete file if there is a new one
                    if ($Topic->$formFileName != "") {
                        File::delete($this->uploadPath . $Topic->$formFileName);
                    }

                    $audioFileFinalName = time() . rand(1111,
                            9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                    $path = $this->uploadPath;
                    $request->file($formFileName)->move($path, $audioFileFinalName);
                }

                $formFileName = "attach_file";
                $attachFileFinalName = "";
                if ($request->$formFileName != "") {
                    // Delete file if there is a new one
                    if ($Topic->$formFileName != "") {
                        File::delete($this->uploadPath . $Topic->$formFileName);
                    }
                    $attachFileFinalName = time() . rand(1111,
                            9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                    $path = $this->uploadPath;
                    $request->file($formFileName)->move($path, $attachFileFinalName);
                }

                if ($request->video_type == 3) {
                    $videoFileFinalName = $request->embed_link;
                } elseif ($request->video_type == 2) {
                    $videoFileFinalName = $request->vimeo_link;
                } elseif ($request->video_type == 1) {
                    $videoFileFinalName = $request->youtube_link;
                } else {
                    $formFileName = "video_file";
                    $videoFileFinalName = "";
                    if ($request->$formFileName != "") {
                        // Delete file if there is a new one
                        if ($Topic->$formFileName != "") {
                            File::delete($this->uploadPath . $Topic->$formFileName);
                        }
                        $videoFileFinalName = time() . rand(1111,
                                9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                        $path = $this->uploadPath;
                        $request->file($formFileName)->move($path, $videoFileFinalName);
                    }

                }
                // End of Upload Files
				if (@$request->title_en != "") {
					foreach (Helper::languagesList() as $ActiveLanguage) {
						if ($ActiveLanguage->box_status) {
							$Topic->{"title_" . $ActiveLanguage->code} = $request->{"title_" . $ActiveLanguage->code};
							$Topic->{"details_" . $ActiveLanguage->code} = $request->{"details_" . $ActiveLanguage->code};
						}
					}
				}
                $Topic->date = Helper::dateForDB($request->date);
                if (@$request->expire_date != "") {
                    $Topic->expire_date = Helper::dateForDB(@$request->expire_date);
                }
                
                if ($request->photo_delete == 1) {
                    // Delete photo_file
                    if ($Topic->photo_file != "") {
                        File::delete($this->uploadPath . $Topic->photo_file);
                    }

                    $Topic->photo_file = "";
                }

                if ($fileFinalName != "") {
                    $Topic->photo_file = $fileFinalName;
                }
                if ($audioFileFinalName != "") {
                    $Topic->audio_file = $audioFileFinalName;
                }

                if ($request->attach_delete == 1) {
                    // Delete attach_file
                    if ($Topic->attach_file != "") {
                        File::delete($this->uploadPath . $Topic->attach_file);
                    }

                    $Topic->attach_file = "";
                }

                if ($attachFileFinalName != "") {
                    $Topic->attach_file = $attachFileFinalName;
                }
                if ($videoFileFinalName != "") {
                    $Topic->video_file = $videoFileFinalName;
                }

                $Topic->icon = $request->icon;
                $Topic->video_type = $request->video_type;
                if ($WebmasterSection->case_status) {
                    $Topic->status = $request->status;
                }
                if (!@Auth::user()->permissionsGroup->active_status) {
                    $Topic->status = 0;
                }
                $Topic->updated_by = Auth::user()->id;
                $Topic->save();
                

                // Remove old categories
                TopicCategory::where('topic_id', $Topic->id)->delete();
                // Save new categories
                if ($request->category_id != "" && $request->category_id != 0) {
                    foreach ($request->category_id as $category) {
                        if ($category > 0) {
                            $TopicCategory = new TopicCategory;
                            $TopicCategory->topic_id = $Topic->id;
                            $TopicCategory->section_id = $category;
                            $TopicCategory->save();
                        }
                    }
                }

                // Save additional Fields
                if (count($WebmasterSection->customFields) > 0) {
                    foreach ($WebmasterSection->customFields as $customField) {
                        // check permission
                        $edit_permission_groups = [];
                        if ($customField->edit_permission_groups != "") {
                            $edit_permission_groups = explode(",", $customField->edit_permission_groups);
                        }
                        if (in_array(Auth::user()->permissions_id, $edit_permission_groups) || in_array(0, $edit_permission_groups) || $customField->edit_permission_groups == "") {
                            // have permission & continue

                            // Remove old Fields Values
                            TopicField::where('topic_id', $Topic->id)->where('field_id', $customField->id)->delete();

                            $field_value = "";
                            $field_value_var = "customField_" . $customField->id;
                            $file_del_id = 'file_delete_' . $customField->id;
                            $file_old_id = 'file_old_' . $customField->id;

                            if ($customField->type == 8 || $customField->type == 9 || $customField->type == 10) {
                                // upload file
                                if ($request->$field_value_var != "") {
                                    $uploadedFileFinalName = time() . rand(1111,
                                            9999) . '.' . $request->file($field_value_var)->getClientOriginalExtension();
                                    $path = $this->uploadPath;
                                    $request->file($field_value_var)->move($path, $uploadedFileFinalName);
                                    $field_value = $uploadedFileFinalName;
                                } else {
                                    // if old file still
                                    $field_value = $request->$file_old_id;
                                }
                                if ($request->$file_del_id) {
                                    // if want to delete the file
                                    File::delete($this->uploadPath . $request->$file_old_id);
                                    $field_value = "";
                                }
                            } elseif ($customField->type == 5) {
                                if ($request->$field_value_var != "") {
                                    $field_value = Helper::dateForDB($request->$field_value_var,1);
                                }
                            } elseif ($customField->type == 4) {
                                if ($request->$field_value_var != "") {
                                    $field_value = Helper::dateForDB($request->$field_value_var);
                                }
                            } elseif ($customField->type == 7) {
                                // if multi check
                                if ($request->$field_value_var != "") {
                                    $field_value = implode(", ", $request->$field_value_var);
                                }
                            } else {
                                $field_value = $request->$field_value_var;
                            }
                            if ($field_value != "") {
                                $TopicField = new TopicField;
                                $TopicField->topic_id = $Topic->id;
                                $TopicField->field_id = $customField->id;
                                $TopicField->field_value = $field_value;
                                $TopicField->save();
                            }
                           
                        }
                    }
                }
                if($WebmasterSection->title_en == 'Listings')
               {
                        $Listing_id= Listing::where('list_id', $id)->first();
                        $Listing=Listing::find($Listing_id->id);
                        $Listing->strategic_location1 =  $request->strategic_location1;
                        $Listing->strategic_location2 =  $request->strategic_location2;
                        $Listing->strategic_location3 =  $request->strategic_location3;
                        $Listing->near_by1 =  $request->near_by1;
                        $Listing->near_by2 =  $request->near_by2;
                        $Listing->near_by3 =  $request->near_by3;
                        $Listing->save();
                       
                        if(isset($request->additional_field)){
                            $Additional_fee=AdditionalFee::where('topic_id' , $id)->where('fee_type','Fee')->orwhere('fee_type','Include')->delete();
                            if($request->input('include') != ''){
                            $include_count = count($request->input('include'));
                                for($i=0;$i<$include_count;$i++){
                                
                                    $AdditionalFee = new AdditionalFee;
                                    $AdditionalFee->topic_id = $id;
                                    $AdditionalFee->fee_type ="Include";
                                    $AdditionalFee->fee_name = $request->input('include')[$i];
                                    $AdditionalFee->save();
                                    }
                            }
                             $count = $request->additional_field;
                            
                           
                            for($i=0;$i<$count;$i++){
                                $fee_name  = "addfeehidden_".$i;
                                $fee_value  = "addfeeselectdivtext_".$i;
                                $fee_text  = "addfeeselect_".$i;
                                // $request->{$dynamicfield};
                                $AdditionalFee = new AdditionalFee;
                                $AdditionalFee->topic_id = $id;
                                $AdditionalFee->fee_type ="Fee";
                                $AdditionalFee->fee_name = $request->{$fee_name};
                                $AdditionalFee->fee_value = $request->{$fee_value};
                                $AdditionalFee->fee_text = $request->{$fee_text};
                                $AdditionalFee->save();
                            }

                        }
                        if(isset($request->tab_activity)) {
                            $Additional_fee=AdditionalFee::where('topic_id' , $id)->where('fee_type','Activity')->delete();
                            if($request->input('activity') != '') {
                            $activity_count = count($request->input('activity'));
                            $AdditionalFee = new AdditionalFee;
                            $AdditionalFee->topic_id = $id;
                            $AdditionalFee->fee_type ="Activity";
                            $AdditionalFee->fee_name =json_encode( $request->activity);   
                            $AdditionalFee->save();
                            }
                        }
                        if(isset($request->tab_package)) {
                            $Package=AdditionalFee::where('topic_id' , $id)->where('fee_type','Package')->delete();
                            if($request->input('package_id') != '') {
                             $package_count = count($request->input('package_id'));
                            for($i=0;$i<$package_count;$i++){
                                    
                                $AdditionalFee = new AdditionalFee;
                                $AdditionalFee->topic_id = $id;
                                $AdditionalFee->fee_type ="Package";
                                $AdditionalFee->fee_name = $request->input('package_id')[$i];   
                                $AdditionalFee->save();
                                } 
                            }
                        }
                        if(isset($request->tab_ammenity)) {
                            $Ammenity=AdditionalFee::where('topic_id' , $id)->where('fee_type','Ammenity')->orwhere('fee_type','Facility')->delete();

                           //return $request->ammenity;
                            if($request->input('ammenity') != '') {
                                    
                                $AdditionalFee = new AdditionalFee;
                                $AdditionalFee->topic_id = $id;
                                $AdditionalFee->fee_type ="Ammenity";
                                $AdditionalFee->fee_name =json_encode( $request->ammenity);   
                                $AdditionalFee->save();
                            }
                            if($request->input('facility') != '') {
                                    
                                $AdditionalFee = new AdditionalFee;
                                $AdditionalFee->topic_id = $id;
                                $AdditionalFee->fee_type ="Facility";
                                $AdditionalFee->fee_name =json_encode( $request->facility);   
                                $AdditionalFee->save();
                            }
                          
                        }

            }
                // SEND Notification Email
                $this->send_notification($WebmasterSection, $Topic, "Update");

                if($WebmasterSection->title_en === "Listings")
                    return true;
                else
                    return redirect()->action('Dashboard\TopicsController@edit', [$webmasterId, $id])->with('doneMessage',__('backend.saveDone'));
            } else {
                if($WebmasterSection->title_en === "Listings")
                    return false;
                else
                    return redirect()->action('Dashboard\TopicsController@index', $webmasterId);
            }
        } else {
            if($WebmasterSection->title_en === "Listings")
                    return false;
            else
                return redirect()->route('NotFound');
        }
        
    }
