UPDATE exam_report_card_subject_wise as updated_table
inner join (
	select `school_id`,`class_id`,`subject_id`, (100- SUM(`percentage`)) as percentage
	from exam_report_card_subject_wise
	where letter_grade != "F" GROUP BY `school_id`,`class_id`,`subject_id`
) as virtual_table on updated_table.school_id = virtual_table.school_id AND updated_table.class_id = virtual_table.class_id AND updated_table.subject_id = virtual_table.subject_id AND updated_table.letter_grade = "F"
set updated_table.percentage = virtual_table.percentage	