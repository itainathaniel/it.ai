import { render, screen, within } from '@testing-library/react';
import App, { shuffleArray } from './App';
import { personalInfo, socialLinks, techStack } from './data/config';

// Mock framer-motion to avoid animation-related issues
jest.mock('framer-motion', () => ({
  motion: {
    img: ({ src, alt, className, children, ...props }: any) => (
      <img src={src} alt={alt} className={className} {...props}>
        {children}
      </img>
    ),
    h1: ({ children, className, ...props }: any) => (
      <h1 className={className} {...props}>
        {children}
      </h1>
    ),
    a: ({ children, ...props }: any) => <a {...props}>{children}</a>,
  },
}));

describe('App Component', () => {
  describe('Personal Information', () => {
    test('renders name and title', () => {
      render(<App />);
      expect(screen.getByText(personalInfo.name)).toBeInTheDocument();
      expect(screen.getByText(personalInfo.title)).toBeInTheDocument();
      expect(screen.getByText(personalInfo.location)).toBeInTheDocument();
    });

    test('renders company information with link', () => {
      render(<App />);
      const companyLink = screen.getByRole('link', { name: personalInfo.company });
      expect(companyLink).toBeInTheDocument();
      expect(companyLink).toHaveAttribute('href', personalInfo.companyLink);
      expect(companyLink).toHaveAttribute('target', '_blank');
      expect(companyLink).toHaveAttribute('rel', 'noopener noreferrer');
    });

    test('renders family information', () => {
      render(<App />);
      expect(screen.getByText(personalInfo.family)).toBeInTheDocument();
    });
  });

  describe('Contact Information', () => {
    test('renders email addresses', () => {
      render(<App />);
      expect(screen.getByText(personalInfo.contact.emails.join(' / '))).toBeInTheDocument();
    });

    test('renders phone number', () => {
      render(<App />);
      expect(screen.getByText(personalInfo.contact.phone)).toBeInTheDocument();
    });

    test('renders address', () => {
      render(<App />);
      expect(screen.getByText(personalInfo.contact.address)).toBeInTheDocument();
    });
  });

  describe('Profile Image', () => {
    test('renders with correct attributes', () => {
      render(<App />);
      const image = screen.getByAltText(personalInfo.name);
      expect(image).toBeInTheDocument();
      expect(image).toHaveClass('w-40', 'h-40', 'rounded-full');
      expect(image).toHaveAttribute('src', expect.stringContaining('itainathaniel.jpg'));
    });
  });

  describe('Social Media Links', () => {
    test('renders all social media links with correct attributes', () => {
      render(<App />);
      const socialLinksContainer = screen.getByTestId('social-links');
      const links = within(socialLinksContainer).getAllByRole('link');
      expect(links).toHaveLength(socialLinks.length);

      socialLinks.forEach(({ href }, index) => {
        expect(links[index]).toHaveAttribute('href', href);
        expect(links[index]).toHaveAttribute('target', '_blank');
        expect(links[index]).toHaveAttribute('rel', 'noopener noreferrer');
      });
    });
  });

  describe('Tech Stack', () => {
    const originalRandom = global.Math.random;

    beforeEach(() => {
      // Mock Math.random to return predictable values
      let callCount = 0;
      global.Math.random = () => {
        callCount += 1;
        return callCount * 0.1; // Will return 0.1, 0.2, 0.3, etc.
      };
    });

    afterEach(() => {
      global.Math.random = originalRandom;
    });

    test('renders all tech stack items', () => {
      render(<App />);
      techStack.forEach(tech => {
        expect(screen.getByText(tech)).toBeInTheDocument();
      });
    });

    test('shuffleArray function properly shuffles array', () => {
      const originalArray = [1, 2, 3, 4, 5];
      const shuffled = shuffleArray([...originalArray]);

      // Test that all elements are still present
      expect(shuffled).toHaveLength(originalArray.length);
      originalArray.forEach(item => {
        expect(shuffled).toContain(item);
      });

      // With our mock random values, we can predict the shuffle result
      expect(shuffled).not.toEqual(originalArray);
      expect(shuffled.join(',')).not.toBe(originalArray.join(','));
    });

    test('tech stack items are all present after shuffle', () => {
      render(<App />);
      const renderedItems = techStack.map(tech => screen.getByText(tech).textContent);
      expect(renderedItems.sort()).toEqual(techStack.sort());
    });
  });

  describe('Document Title', () => {
    test('sets correct title', () => {
      render(<App />);
      expect(document.title).toBe(`${personalInfo.name} | ${personalInfo.title}`);
    });
  });
});
