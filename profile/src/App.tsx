import { JSX, useEffect, useState } from 'react';
import { motion } from 'framer-motion';
import { BsFillEnvelopeFill } from 'react-icons/bs';
import profileImage from './images/itainathaniel.jpg';
import { personalInfo, socialLinks, techStack } from './data/config';

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
    <div className="min-h-screen flex flex-col items-center justify-center bg-gray-50 text-gray-900 px-4">
      <motion.img
        src={profileImage}
        alt={personalInfo.name}
        className="w-40 h-40 rounded-full shadow-lg border-4 border-white"
        initial={{ opacity: 0, scale: 0.8 }}
        animate={{ opacity: 1, scale: 1 }}
        transition={{ duration: 0.5 }}
      />

      <motion.h1 className="text-3xl font-bold mt-4" animate={{ opacity: 1 }}>
        {personalInfo.name}
      </motion.h1>
      <p className="text-lg text-gray-600">{personalInfo.title}</p>
      <p className="mt-2 text-sm text-gray-500">{personalInfo.location}</p>

      <p className="mt-4 text-md text-gray-700 text-center">
        I'm a fullstack developer at{' '}
        <a href={personalInfo.companyLink} target="_blank" rel="noopener noreferrer">
          {personalInfo.company}
        </a>
      </p>
      <p className="text-md text-gray-700 text-center">{personalInfo.family}</p>

      <div className="flex space-x-4 mt-4 social-links" data-testid="social-links">
        {socialLinks.map(({ href, icon }, index) => (
          <motion.a
            key={index}
            href={href}
            target="_blank"
            rel="noopener noreferrer"
            className="text-xl text-gray-700 hover:text-blue-500 transition duration-300"
            initial={{ opacity: 0, scale: 0.8 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ duration: 0.5 }}
          >
            {icon}
          </motion.a>
        ))}
      </div>

      <div className="mt-6 text-sm text-gray-600 text-center">
        <p>
          <BsFillEnvelopeFill className="inline mr-2" /> {personalInfo.contact.emails.join(' / ')}
        </p>
        <p>{personalInfo.contact.phone}</p>
        <p>{personalInfo.contact.address}</p>
      </div>

      <div className="mt-10 flex flex-wrap justify-center gap-2 text-sm text-gray-700 max-w-sm">
        {shuffledTechStack.map((tech, index) => (
          <span
            key={index}
            className="px-3 py-1 bg-gray-200 rounded-full text-gray-800 hover:bg-gray-300 transition duration-300"
          >
            {tech}
          </span>
        ))}
      </div>
    </div>
  );
}
