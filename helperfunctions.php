<?php

function escape_for_id ($string) {
  //$string = preg_replace("/[^\x01-\x7F]/", "", $string);
  //$string = str_replace (" ", "", $string);
  $string = preg_replace ('/[^A-Za-z0-9]/', "", $string);
  return lcfirst ($string);
}

function escape_for_xml ($string) {
  return htmlentities ($string);
}

function get_default_tool ($tool) {
  switch ($tool) {
    case 'accessibility': 
      return 'sakai.accessibility';
    case 'myWorkspace': 
      return 'sakai.iframe.myworkspace';
    case 'announcements': 
      return 'sakai.announcements';
    case 'assignments': 
      return 'sakai.assignment.grades';
    case 'chat': 
      return 'sakai.chat';
    case 'dropBox': 
      return 'sakai.dropbox';
    case 'email': 
      return 'sakai.mailtool';
    case 'emailArchive': 
      return 'sakai.mailbox';
    case 'externalToolLTI': 
      return 'sakai.basiclti';
    case 'forums': 
      return 'sakai.forums';
    case 'gradebook': 
      return 'sakai.gradebook.tool';
    case 'lessons': 
      return 'sakai.lessonbuildertool';
    case 'messages': 
      return 'sakai.messages';
    case 'news': 
      return 'sakai.news';
    case 'podcasts': 
      return 'sakai.podcasts';
    case 'polls': 
      return 'sakai.poll';
    case 'postEm': 
      return 'sakai.postem';
    case 'profile': 
      return 'sakai.profile2';
    case 'resources': 
      return 'sakai.resources';
    case 'roster': 
      return 'sakai.site.roster2';
    case 'schedule': 
      return 'sakai.schedule';
    case 'search': 
      return 'sakai.search';
    case 'sectionInfo': 
      return 'sakai.sections';
    case 'signUp': 
      return 'sakai.signup';
    case 'siteInfo': 
      return 'sakai.siteinfo';
    case 'statistics': 
      return 'sakai.sitestats';
    case 'syllabus': 
      return 'sakai.syllabus';
    case 'testsQuizzes': 
      return 'sakai.samigo';
    case 'webContent': 
      return 'sakai.iframe';
    case 'wiki': 
      return 'sakai.rwiki';
    default:
     return "sakai.$tool";
  }
}

