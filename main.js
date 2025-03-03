import 'normalize.css'
import './src/styles/main.scss'
import './src/images/logo.png'
import './src/images/sprite.svg'
import { initStickyHeader } from './src/scripts/sticky-header'
import { initScheduleCarousel } from './src/scripts/schedule-carousel'
import { initFeedbackForm } from './src/scripts/feedback-form'
import { initCallButton } from './src/scripts/call-button'
import fslightbox from 'fslightbox'
import { initMobileMenu } from './src/scripts/mobile-menu'
import { initSnow } from './src/scripts/snow'
import { initHomePreachingCarousel } from './src/scripts/home-preaching-carousel'
import { initShrineCarousel } from './src/scripts/shrine-carousel'

initStickyHeader()
initFeedbackForm()
initMobileMenu()
initSnow()
initScheduleCarousel()
initHomePreachingCarousel()
initShrineCarousel()
