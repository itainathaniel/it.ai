import { useEffect } from "react";
import { motion } from "framer-motion";
import { FaTwitter, FaGithub, FaLinkedin, FaFacebook, FaInstagram } from "react-icons/fa";
import { BsFillEnvelopeFill } from "react-icons/bs";

const socialLinks = [
  { href: "https://twitter.com/itainathaniel", icon: <FaTwitter /> },
  { href: "https://github.com/itainathaniel", icon: <FaGithub /> },
  { href: "https://linkedin.com/in/itainathaniel", icon: <FaLinkedin /> },
  { href: "https://facebook.com/itainathaniel", icon: <FaFacebook /> },
  { href: "https://instagram.com/itainathaniel", icon: <FaInstagram /> }
];

export default function Home() {
  useEffect(() => {
    document.title = "Itai Nathaniel | Developer & Pâtissier";
  }, []);

  return (
    <div className="min-h-screen flex flex-col items-center justify-center bg-gray-50 text-gray-900 px-4">
      <motion.img
        src="https://media.licdn.com/dms/image/v2/D4D03AQFzC6NfNOOGtw/profile-displayphoto-shrink_800_800/B4DZUN_XBfG4Ag-/0/1739696468659?e=1746057600&v=beta&t=YJVz3zi2cH-TjkHXLLX2hFRFQoutZrxwhVZvX6By8hA"
        alt="Itai Nathaniel"
        className="w-40 h-40 rounded-full shadow-lg border-4 border-white"
        initial={{ opacity: 0, scale: 0.8 }}
        animate={{ opacity: 1, scale: 1 }}
        transition={{ duration: 0.5 }}
      />

      <motion.h1 className="text-3xl font-bold mt-4" animate={{ opacity: 1 }}>
        Itai Nathaniel
      </motion.h1>
      <p className="text-lg text-gray-600">Senior Developer | Pâtissier | Pilot</p>
      <p className="mt-2 text-sm text-gray-500">Tel Aviv - Jaffa, Israel</p>
      
      <p className="mt-4 text-md text-gray-700 text-center">I'm a fullstack developer at Amplication.</p>
      <p className="text-md text-gray-700 text-center">Married to Chen and father to Ilil, Aya & Arbel.</p>

      <div className="flex space-x-4 mt-4">
        {socialLinks.map(({ href, icon }, index) => (
          <motion.a
            key={index}
            href={href}
            target="_blank"
            rel="noopener noreferrer"
            className="text-xl text-gray-700 hover:text-blue-500 transition duration-300"
            whileHover={{ scale: 1.1 }}
          >
            {icon}
          </motion.a>
        ))}
      </div>

      <div className="mt-6 text-sm text-gray-600 text-center">
        <p><BsFillEnvelopeFill className="inline mr-2" /> itainathaniel@gmail.com</p>
        <p>+972 (52) 3591891</p>
        <p>26 Rambam St., Tel Aviv - Jaffa, Israel 6581312</p>
      </div>
    </div>
  );
}

