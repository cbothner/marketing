<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  tagline:
    label: Tagline
    type: textarea
  description:
    label: Description
    type: textarea
  pagetagline:
    label: Page tagline
    type: text
  pagesubtagline:
    lable: Page Sub-tagline
    type: textarea
  subdescription:
    label: Description for parent page
    type: textarea
  text:
    label: Text
    type:  textarea
  link:
    label: link
    type: text
  feature:
    label: Key feature
    type: textarea
  featureimg:
    label: Feature image
    type: textarea
  wbg:
    label: with background
    type: textarea
  timeline:
    label: Timeline
    type: structure
    entry: >
      {{icon}} {{content}} {{dateofevent}} {{newslink}}
    fields:
      icon:
        label: Icon
        type: text
      content:
        label: Content
        type: textarea
      dateofevent:
        label: Date
        type: text
      newslink:
        label: News link
        type: text
