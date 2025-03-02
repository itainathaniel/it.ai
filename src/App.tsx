import { JSX, useEffect, useState, Suspense } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { BsFillEnvelopeFill } from 'react-icons/bs';
import { Helmet } from 'react-helmet';
import profileImage from './images/itainathaniel.jpg';
import { personalInfo, socialLinks, techStack } from './data/config';

// Animation variants
const fadeInScale = {
  initial: { opacity: 0, scale: 0.8 },
  animate: { opacity: 1, scale: 1 },
  transition: { duration: 0.5 },
};

// Components
const ProfileImage = () => (
  <motion.img
    src={profileImage}
    alt={personalInfo.name}
    className="w-40 h-40 rounded-full shadow-lg border-4 border-white hover:border-pink-200 transition-colors duration-1000"
    {...fadeInScale}
    loading="lazy"
  />
);

const SocialLinks = () => (
  <div className="flex space-x-4 mt-4 social-links" data-testid="social-links">
    {socialLinks.map(({ href, icon }, index) => (
      <motion.a
        key={href}
        href={href}
        target="_blank"
        rel="noopener noreferrer"
        className="text-xl text-gray-700 hover:text-blue-500 transition duration-300"
        {...fadeInScale}
        transition={{ duration: 0.5, delay: index * 0.1 }}
        aria-label={`Visit my profile on ${new URL(href).hostname.split('.')[1]}`}
      >
        {icon}
      </motion.a>
    ))}
  </div>
);

const ContactInfo = () => (
  <div className="mt-6 text-sm text-gray-600 text-center">
    <p>
      <BsFillEnvelopeFill className="inline mr-2" aria-hidden="true" />
      <a
        href={`mailto:${personalInfo.contact.emails[0]}`}
        className="hover:text-blue-500 transition-colors"
      >
        {personalInfo.contact.emails[0]}
      </a>
      <span className="mx-2">|</span>
      <BsFillEnvelopeFill className="inline mr-2" aria-hidden="true" />
      <a
        href={`mailto:${personalInfo.contact.emails[1]}`}
        className="hover:text-blue-500 transition-colors"
      >
        {personalInfo.contact.emails[1]}
      </a>
    </p>
    <p>
      <a
        href={`tel:${personalInfo.contact.phone}`}
        className="hover:text-blue-500 transition-colors"
      >
        {personalInfo.contact.phone}
      </a>
    </p>
    <address className="not-italic">{personalInfo.contact.address}</address>
  </div>
);

const TechStack = ({ technologies }: { technologies: string[] }) => (
  <div className="mt-10 flex flex-wrap justify-center gap-2 text-sm text-gray-700 max-w-sm">
    <AnimatePresence>
      {technologies.map((tech, index) => (
        <motion.span
          key={tech}
          className="px-3 py-1 bg-gray-200 rounded-full text-gray-800 hover:bg-gray-300 transition duration-300"
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.3, delay: index * 0.05 }}
        >
          {tech}
        </motion.span>
      ))}
    </AnimatePresence>
  </div>
);

export const shuffleArray = <T,>(array: T[]): T[] => {
  const shuffled = [...array];
  for (let i = shuffled.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
  }
  return shuffled;
};

export default function App(): JSX.Element {
  const [shuffledTechStack, setShuffledTechStack] = useState<string[]>([]);

  useEffect(() => {
    document.title = `${personalInfo.name} | ${personalInfo.title}`;
    setShuffledTechStack(shuffleArray(techStack));
  }, []);

  return (
    <>
      <Helmet>
        <title>{`${personalInfo.name} | ${personalInfo.title}`}</title>
        <meta
          name="description"
          content={`${personalInfo.name} - ${personalInfo.title}. ${personalInfo.family}. Based in ${personalInfo.location}.`}
        />
        <meta property="og:title" content={`${personalInfo.name} | ${personalInfo.title}`} />
        <meta
          property="og:description"
          content={`${personalInfo.name} - ${personalInfo.title}. Working at ${personalInfo.work.company}.`}
        />
        <meta property="og:image" content={profileImage} />
        <meta name="twitter:card" content="summary" />
      </Helmet>

      <main className="min-h-screen flex flex-col items-center justify-center bg-gray-50 text-gray-900 px-4">
        <Suspense fallback={<div className="w-40 h-40 rounded-full bg-gray-200 animate-pulse" />}>
          <ProfileImage />
        </Suspense>

        <motion.h1
          className="text-3xl font-bold mt-4"
          animate={{ opacity: 1 }}
          initial={{ opacity: 0 }}
        >
          {personalInfo.name}
        </motion.h1>
        <p className="text-lg text-gray-600">{personalInfo.title}</p>
        <p className="mt-2 text-sm text-gray-500">{personalInfo.location}</p>

        <p className="mt-4 text-md text-gray-700 text-center">
          I'm a {personalInfo.work.position} at{' '}
          <a
            href={personalInfo.work.url}
            target="_blank"
            rel="noopener noreferrer"
            className="text-blue-800 hover:text-blue-600 transition-colors"
          >
            {personalInfo.work.company}
          </a>
        </p>
        <p className="text-md text-gray-700 text-center">{personalInfo.family}</p>

        <SocialLinks />
        <ContactInfo />
        <TechStack technologies={shuffledTechStack} />
      </main>
    </>
  );
}
