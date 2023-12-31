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

// staffs table
staffs_addTip=["",spacer+"This option allows all members of the group to add records to the 'Staffs' table. A member who adds a record to the table becomes the 'owner' of that record."];

staffs_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Staffs' table."];
staffs_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Staffs' table."];
staffs_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Staffs' table."];
staffs_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Staffs' table."];

staffs_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Staffs' table."];
staffs_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Staffs' table."];
staffs_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Staffs' table."];
staffs_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Staffs' table, regardless of their owner."];

staffs_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Staffs' table."];
staffs_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Staffs' table."];
staffs_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Staffs' table."];
staffs_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Staffs' table."];

// notes table
notes_addTip=["",spacer+"This option allows all members of the group to add records to the 'Notes' table. A member who adds a record to the table becomes the 'owner' of that record."];

notes_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Notes' table."];
notes_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Notes' table."];
notes_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Notes' table."];
notes_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Notes' table."];

notes_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Notes' table."];
notes_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Notes' table."];
notes_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Notes' table."];
notes_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Notes' table, regardless of their owner."];

notes_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Notes' table."];
notes_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Notes' table."];
notes_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Notes' table."];
notes_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Notes' table."];

// notes_category table
notes_category_addTip=["",spacer+"This option allows all members of the group to add records to the 'Notes category' table. A member who adds a record to the table becomes the 'owner' of that record."];

notes_category_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Notes category' table."];
notes_category_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Notes category' table."];
notes_category_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Notes category' table."];
notes_category_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Notes category' table."];

notes_category_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Notes category' table."];
notes_category_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Notes category' table."];
notes_category_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Notes category' table."];
notes_category_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Notes category' table, regardless of their owner."];

notes_category_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Notes category' table."];
notes_category_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Notes category' table."];
notes_category_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Notes category' table."];
notes_category_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Notes category' table."];

// student_achievments table
student_achievments_addTip=["",spacer+"This option allows all members of the group to add records to the 'Student achievments' table. A member who adds a record to the table becomes the 'owner' of that record."];

student_achievments_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Student achievments' table."];
student_achievments_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Student achievments' table."];
student_achievments_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Student achievments' table."];
student_achievments_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Student achievments' table."];

student_achievments_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Student achievments' table."];
student_achievments_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Student achievments' table."];
student_achievments_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Student achievments' table."];
student_achievments_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Student achievments' table, regardless of their owner."];

student_achievments_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Student achievments' table."];
student_achievments_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Student achievments' table."];
student_achievments_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Student achievments' table."];
student_achievments_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Student achievments' table."];

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
