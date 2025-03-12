import React from 'react';
import { FaTwitter, FaGithub, FaLinkedin, FaFacebook, FaInstagram } from 'react-icons/fa';
import { FaBluesky } from 'react-icons/fa6';

export interface SocialLink {
  href: string;
  icon: React.ReactNode;
}

export const socialLinks: SocialLink[] = [
  { href: 'https://twitter.com/itainathaniel', icon: <FaTwitter /> },
  { href: 'https://github.com/itainathaniel', icon: <FaGithub /> },
  { href: 'https://linkedin.com/in/itainathaniel', icon: <FaLinkedin /> },
  { href: 'https://facebook.com/itainathaniel', icon: <FaFacebook /> },
  { href: 'https://instagram.com/itainathaniel', icon: <FaInstagram /> },
  { href: 'https://bsky.app/profile/itainathaniel.bsky.social', icon: <FaBluesky /> },
];

export const techStack = [
  'TypeScript',
  'Node.js',
  'React',
  'ChatGPT',
  'OpenAI',
  'PHP',
  'Laravel',
  'AWS',
  'GraphQL',
  'Prisma',
  'Python',
  'GitHub',
  'Docker',
  'TailwindCSS',
  'HTML',
  'Nginx',
  'MySQL',
  'PostgreSQL',
  'Redis',
  'Jira',
  'NGrok',
  'Stripe',
  'PayPal',
  'Warp',
  'Vite',
  'Next.js',
  '🍕',
  '🍺',
  '🐱',
  '🚴‍♂️',

];

export const personalInfo = {
  name: 'Itai Nathaniel',
  title: 'Senior Developer | Pâtissier',
  location: 'Tel Aviv - Jaffa, Israel',
  work: {
    title: 'senior developer',
    company: '',
    url: '',
  },
  family: 'Married to Chen and father to Ilil, Aya & Arbel',
  contact: {
    emails: ['itainathaniel@gmail.com', 'im@it.ai'],
    phone: '+972 (52) 3591891',
    address: '26 Rambam St., Tel Aviv - Jaffa, Israel 6581312',
  },
};
