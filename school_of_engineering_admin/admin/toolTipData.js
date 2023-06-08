var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// soe_posts table
soe_posts_addTip=["",spacer+"This option allows all members of the group to add records to the 'Soe posts' table. A member who adds a record to the table becomes the 'owner' of that record."];

soe_posts_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Soe posts' table."];
soe_posts_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Soe posts' table."];
soe_posts_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Soe posts' table."];
soe_posts_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Soe posts' table."];

soe_posts_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Soe posts' table."];
soe_posts_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Soe posts' table."];
soe_posts_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Soe posts' table."];
soe_posts_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Soe posts' table, regardless of their owner."];

soe_posts_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Soe posts' table."];
soe_posts_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Soe posts' table."];
soe_posts_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Soe posts' table."];
soe_posts_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Soe posts' table."];

// category table
category_addTip=["",spacer+"This option allows all members of the group to add records to the 'Category' table. A member who adds a record to the table becomes the 'owner' of that record."];

category_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Category' table."];
category_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Category' table."];
category_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Category' table."];
category_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Category' table."];

category_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Category' table."];
category_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Category' table."];
category_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Category' table."];
category_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Category' table, regardless of their owner."];

category_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Category' table."];
category_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Category' table."];
category_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Category' table."];
category_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Category' table."];

// soe_gallery table
soe_gallery_addTip=["",spacer+"This option allows all members of the group to add records to the 'Soe Gallery' table. A member who adds a record to the table becomes the 'owner' of that record."];

soe_gallery_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Soe Gallery' table."];
soe_gallery_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Soe Gallery' table."];
soe_gallery_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Soe Gallery' table."];
soe_gallery_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Soe Gallery' table."];

soe_gallery_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Soe Gallery' table."];
soe_gallery_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Soe Gallery' table."];
soe_gallery_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Soe Gallery' table."];
soe_gallery_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Soe Gallery' table, regardless of their owner."];

soe_gallery_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Soe Gallery' table."];
soe_gallery_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Soe Gallery' table."];
soe_gallery_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Soe Gallery' table."];
soe_gallery_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Soe Gallery' table."];

// courses table
courses_addTip=["",spacer+"This option allows all members of the group to add records to the 'Courses' table. A member who adds a record to the table becomes the 'owner' of that record."];

courses_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Courses' table."];
courses_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Courses' table."];
courses_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Courses' table."];
courses_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Courses' table."];

courses_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Courses' table."];
courses_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Courses' table."];
courses_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Courses' table."];
courses_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Courses' table, regardless of their owner."];

courses_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Courses' table."];
courses_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Courses' table."];
courses_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Courses' table."];
courses_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Courses' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
